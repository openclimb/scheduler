// スプレッドシートのID
const SpreadSheetID = "1Kmk0kAVr_w_GlCPEMsXyGmDEkxyFXAvJ9Yf2uKEFO28";

// 日本時間を強制取得
const d = new Date(
  Date.now() + (new Date().getTimezoneOffset() + 9 * 60) * 60 * 1000
);
const year = d.getFullYear();
let month = d.getMonth() + 1;
let date = d.getDate();
let hours = d.getHours();
let minutes = d.getMinutes();

// シートの中身を記述
const titles = [
  ["日付", "勤務形態", "開始時刻", "終了時刻", "交通費(無0, 有1)", "備考"],
];

// 勤務形態ごとの色
const color_conf = {
  在宅: "#b0c4de",
  出社: "#90ee90",
  休日: "#f0e68c",
  有給: "#ffa500",
};

// 勤務形態の選択肢
const work_style = ["在宅", "出社", "休日", "有給"];

// slackのwebhookで実行するapi
function doPost(e) {
  let spreadSheet = SpreadsheetApp.openById(SpreadSheetID); // ←シート名を入力する
  const token = "WBJToUyAV5XDaH5H1lYpibnl"; // ← Outgoing Webhook のトークンを入力する
  const sheetName = year + "_" + month;
  if (token == e.parameter.token) {
    // 指定した日付のシートが存在するかチェック
    if (!spreadSheet.getSheetByName(sheetName)) {
      createSpreadSheet(year, month);
    }
  }

  // シートを設定
  let sheet = spreadSheet.getSheetByName(sheetName);

  // 送られてきたテキストを確認
  const text = e.parameter.text;

  // 勤務時刻を入力する
  if (text.indexOf("開始") != -1) {
    // 切り捨て(10分単位にする)
    minutes = Math.floor(minutes / 10) * 10;
    if (minutes == 0 || minutes == 60) {
      minutes = "00";
    }
    insertData(sheet, date + 1, 3, [[hours + ":" + minutes]]);
  } else if (text.indexOf("終了") != -1) {
    // 切り上げ(10分単位にする)
    minutes = Math.ceil(minutes / 10) * 10;
    if (minutes == 60) hours += 1;
    // 翌日の時は時間を戻す
    // 翌月の9時より前の時は前日に記入する
    if (hours <= 9) {
      date -= 1;
      if (date < 1) {
        sheet = spreadSheet.getSheetByName(year + "_" + month - 1);
      }
    }
    if (hours == 24) hours = 0;
    // minutesが0もしくは60の時,"00"にする
    if (minutes == 0 || minutes == 60) {
      minutes = "00";
    }
    insertData(sheet, date + 1, 4, [[hours + ":" + minutes]]);
  }

  // 勤務形態を入力する
  if (text.indexOf("在宅") != -1) {
    insertData(sheet, date + 1, 2, [["在宅"]]);
    insertData(sheet, date + 1, 5, [[0]]);
  } else if (text.indexOf("出社") != -1) {
    insertData(sheet, date + 1, 2, [["出社"]]);
    insertData(sheet, date + 1, 5, [[1]]);
  }
}

// 新しくシートを作成する関数
function createSpreadSheet(year, month) {
  const sheetName = year + "_" + month;
  const spreadSheet = SpreadsheetApp.openById(SpreadSheetID);
  // sheetNameのシートの存在をチェック
  if (spreadSheet.getSheetByName(sheetName)) return;
  const newSheet = spreadSheet.insertSheet();
  newSheet.setName(sheetName);

  // 日付を設定
  const days = new Date(parseInt(year, 10), parseInt(month, 10), 0).getDate();
  const days_array = [[...Array(days).keys()].map((i) => ++i)];
  const transpose = (a) => a[0].map((_, c) => a.map((r) => r[c]));

  // タイトルカラムを挿入
  insertData(newSheet, 1, 1, titles);
  let title_range = newSheet.getRangeList(["A1:F1"]);
  // 中央寄せ
  title_range.setHorizontalAlignment("center");
  // 太字
  title_range.setFontWeight("bold");
  // 枠線設定
  title_range.setBorder(
    null,
    null,
    true,
    null,
    false,
    false,
    null,
    SpreadsheetApp.BorderStyle.SOLID_THICK
  );

  // 日付カラムを挿入
  insertData(newSheet, 2, 1, transpose(days_array));
  let date_range = newSheet.getRangeList(["A1:A" + (days + 1)]);
  date_range.setHorizontalAlignment("center");
  date_range.setBorder(null, null, null, true, null, null);

  days_array[0].forEach(function (day) {
    // 休日・有給の場合は時間を"-"にする
    newSheet
      .getRange(day + 1, 3, 1, 1)
      .setValue(
        "=IF(OR(B" + (day + 1) + '="有給",B' + (day + 1) + '="休日"),"-",)'
      );
    newSheet
      .getRange(day + 1, 4, 1, 1)
      .setValue(
        "=IF(OR(B" + (day + 1) + '="有給",B' + (day + 1) + '="休日"),"-",)'
      );

    // 勤務形態のプルダウン
    pulldown_menu(newSheet, work_style, "B" + (day + 1));
  });

  // 勤務形態に応じて背景を変化させる
  Corloring_for_workstyle(newSheet, days);

  // 休日を記述
  insertHoliday(newSheet, year, month, days);

  //新しく追加したシートを先頭に移動
  newSheet.activate();
  spreadSheet.moveActiveSheet(1);
}

// プルダウンによる選択
function pulldown_menu(sheet, values, area) {
  const rule = SpreadsheetApp.newDataValidation()
    .requireValueInList(values)
    .build();
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
      insertData(sheet, i + 1, 3, [["-"]]);
      insertData(sheet, i + 1, 4, [["-"]]);
    }
  }
}

// データを挿入する関数
function insertData(sheet, row, column, array) {
  sheet.getRange(row, column, array.length, array[0].length).setValues(array);
}

// 勤務形態に応じて背景色を変更する
function Corloring_for_workstyle(sheet, days) {
  let range = sheet.getRange("A2:F" + (days + 1));
  work_style.forEach(function (style) {
    let rule = SpreadsheetApp.newConditionalFormatRule()
      // どうやら基準の位置(ここではB2を設定)すれば全ての行に適用されるみたい
      .whenFormulaSatisfied('=$B2="' + style + '"')
      .setBackground(color_conf[style])
      .setRanges([range])
      .build();
    var rules = sheet.getConditionalFormatRules();
    rules.push(rule);
    sheet.setConditionalFormatRules(rules);
  });
}
