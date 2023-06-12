// スプレッドシートのID
const SpreadSheetID = "1Kmk0kAVr_w_GlCPEMsXyGmDEkxyFXAvJ9Yf2uKEFO28";

// シートの中身を記述
const titles = [
  ["日付", "勤務形態", "開始時刻", "終了時刻", "交通費(無0, 有1)", "備考"],
];

// 勤務形態ごとの色
const color_conf = {
  "在宅": "#b0c4de",
  "出社": "#90ee90",
  "休日": "#f0e68c",
  "有給": "#ffa500"
}

// 勤務形態の選択肢
const work_style = ['在宅', '出社', '休日', '有給'];

// シートのデータを取得する関数
function getSheet(sheetName) {
  const ss = SpreadsheetApp.openById(SpreadSheetID);
  const sheet = ss.getSheetByName(sheetName);
  const range = sheet.getRange(1, 1, titles.length+31, titles[0].length);

  console.log(range.getValues());
  return range.getValues();
}

// データを挿入する関数
function insertData(sheet, row, column, array) {
  sheet.getRange(row, column, array.length, array[0].length).setValues(array);
}

// プルダウンによる選択
function pulldown_menu(sheet, values, area) {
  const rule = SpreadsheetApp.newDataValidation().requireValueInList(values).build();
  sheet.getRange(area).setDataValidation(rule);
}

// 休日を挿入する関数
function insertHoliday(sheet, year, month, days) {
  let date, day;
  for (i = 1; i <= days; i++) {
    date = new Date(year, month - 1, i);
    day = date.getDay();
    if (day == 0 || day == 6) {
      insertData(sheet, i + 1, 2, [["休日"]]);
      insertData(sheet, i+1, 3, [["-"]]);
      insertData(sheet, i+1, 4, [["-"]]);
    } else {
      insertData(sheet, i+1, 2, [["在宅"]]);
    }
  }
}

// GASから何かを返すだけのときはこっち
function doGet(e) {
  const sheetName = e.parameter.year + "_" + e.parameter.month;
  // ここにGASから返す処理を書く
  const res = { sheetData: getSheet(sheetName) };

  // エクステンションにレスポンスを返す
  const output = ContentService.createTextOutput();
  output.setMimeType(ContentService.MimeType.JSON);
  output.setContent(JSON.stringify(res));
  return output;
}

// テンプレートを作成する
function doPost(e) {
  const data = JSON.parse(e.postData.getDataAsString());
  const sheetName = data.year + "_" + data.month;
  const spreadSheet = SpreadsheetApp.openById(SpreadSheetID);
  // sheetNameのシートの存在をチェック
  if (spreadSheet.getSheetByName(sheetName)) return;
  const newSheet = spreadSheet.insertSheet();
  newSheet.setName(sheetName);

  // 日付を設定
  const days = new Date(
    parseInt(data.year, 10),
    parseInt(data.month, 10),
    0
  ).getDate();
  const days_array = [[...Array(days).keys()].map((i) => ++i)];
  const transpose = (a) => a[0].map((_, c) => a.map((r) => r[c]));

  // タイトルカラムを挿入
  insertData(newSheet, 1, 1, titles);
  let title_range = newSheet.getRangeList(['A1:F1']);
  // 中央寄せ
  title_range.setHorizontalAlignment('center');
  // 太字
  title_range.setFontWeight("bold");
  // 枠線設定
  title_range.setBorder(null, null, true, null, false, false, null, SpreadsheetApp.BorderStyle.SOLID_THICK);

  // 日付カラムを挿入
  insertData(newSheet, 2, 1, transpose(days_array));
  let date_range = newSheet.getRangeList(['A1:A'+(days+1)]);
  date_range.setHorizontalAlignment('center');
  date_range.setBorder(null, null, null, true, null, null);

  
  days_array[0].forEach(function(day){
    // 休日・有給の場合は時間を"-"にする
    newSheet.getRange(day+1, 3, 1, 1).setValue('=IF(OR(B'+(day+1)+'="有給",B'+(day+1)+'="休日"),"-",)');
    newSheet.getRange(day+1, 4, 1, 1).setValue('=IF(OR(B'+(day+1)+'="有給",B'+(day+1)+'="休日"),"-",)');

    // 勤務形態のプルダウン
    pulldown_menu(newSheet, work_style, 'B'+(day+1));
  });
  
  // 勤務形態に応じて背景を変化させる
  Corloring_for_workstyle(newSheet, days);

  // 休日を記述
  insertHoliday(newSheet, data.year, data.month, days);

  //新しく追加したシートを先頭に移動
  newSheet.activate();
  spreadSheet.moveActiveSheet(1);
}

// 勤務形態に応じて背景色を変更する
function Corloring_for_workstyle(sheet, days) {
  let range = sheet.getRange('A2:F'+(days+1));
  work_style.forEach(function(style){
  let rule = SpreadsheetApp.newConditionalFormatRule()
    // どうやら基準の位置(ここではB2を設定)すれば全ての行に適用されるみたい
    .whenFormulaSatisfied('=$B2="'+style+'"')
    .setBackground(color_conf[style])
    .setRanges([range])
    .build()
    var rules = sheet.getConditionalFormatRules();
    rules.push(rule);
    sheet.setConditionalFormatRules(rules);
  });
}

function test(){
  const spreadSheet = SpreadsheetApp.openById(SpreadSheetID);
  const sheet = spreadSheet.getSheetByName("test");
  let title_range = sheet.getRangeList(['A1:F1']);
  // 中央寄せ
  title_range.setHorizontalAlignment('center');
  // 太字
  title_range.setFontWeight("bold");
  // 枠線設定
  title_range.setBorder(null, null, true, null, false, false, null, null);
  let days=32

  let date_range = sheet.getRangeList(['A1:A'+(days+1)]);
  date_range.setHorizontalAlignment('center');
  date_range.setBorder(null, null, null, true, null, null);


  let range = sheet.getRange('A2:F32');
  
  work_style.forEach(function(style){
  let rule = SpreadsheetApp.newConditionalFormatRule()
    // どうやら基準の位置(ここではB2を設定)すれば全ての行に適用されるみたい
    .whenFormulaSatisfied('=$B2="'+style+'"')
    .setBackground(color_conf[style])
    .setRanges([range])
    .build()
    var rules = sheet.getConditionalFormatRules();
    rules.push(rule);
    sheet.setConditionalFormatRules(rules);
  });
  //新しく追加したシートを先頭に移動
  sheet.activate();
  spreadSheet.moveActiveSheet(1);

}
