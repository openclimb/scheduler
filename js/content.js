// ページ設定条件定義

// 勤務表のurl
const ss_url =
  "https://docs.google.com/spreadsheets/d/1Kmk0kAVr_w_GlCPEMsXyGmDEkxyFXAvJ9Yf2uKEFO28/edit#gid=748123391";

// 現在の日付を取得
const now = new Date();
// ボタン用の枠(div)のidを指定
const button_area_id = "ext_control";
// 年(西暦)のidを指定
const button_year_id = "ctl_year";
// 月のidを指定
const button_month_id = "ctl_month";
// ボタンの配置場所(この要素の直後に配置される)
const button_place = "body";

// 勤務形態の連想配列
const work_style = {
  出社: 1001,
  在宅: 1008,
  休日: 201,
  有給: 251,
};

$(function () {
  // 入力枠をヘッダーに固定する
  let fixed = 130;
  let target_div = "#ext_control";
  $(window).on("scroll", function () {
    // スクロール値を取得する場合「.scrollTop()」
    let scroll = $(window).scrollTop();
    // とある要素「#to」までスクロールしたらアラートを出します。
    if (scroll > fixed) {
      $(target_div).addClass("fixed");
    } else {
      $(target_div).removeClass("fixed");
    }
  });

  // button_placeの直後にdiv要素を入れる
  $(button_place).prepend(
    "<div id='" +
      button_area_id +
      "'><p id='control_title'>スプレッドシート連携</p></div>"
  );

  // 年を指定
  $("#" + button_area_id).append(
    "<input type='number' id='" +
      button_year_id +
      "' value='" +
      now.getFullYear() +
      "'>年"
  );

  // 月を指定
  $("#" + button_area_id).append(
    "<input type='number' id='" +
      button_month_id +
      "' value='" +
      (now.getMonth() + 1) +
      "' min='1' max='12'>月"
  );

  // ボタンの配置
  $("#" + button_area_id).append(
    "<button id='insert_data'>データ挿入</button>"
  );
  // テンプレートを作成
  $("#" + button_area_id).append(
    "<br><button id='create_template'>勤務表のテンプレートを作成</button>"
  );
  // SpreadSheetへ遷移する画面へ飛ぶ
  $("#" + button_area_id).append(
    '<a href="' + ss_url + '" target="_blank">勤務表のSpreadSheetへ遷移</a>'
  );

  // backgroundでのデータ取得(spreadsheet連携)
  $("#insert_data").click(function () {
    let selected_year = $("#" + button_year_id).val();
    let selected_month = $("#" + button_month_id).val();

    // ローディング表示
    $("#insert_data").text("データ取得中...").prop("disabled", true);

    chrome.runtime.sendMessage(
      {
        message: "contentからbackgrouodに送るもの(無くてもいい)",
        method: "get",
        year: selected_year,
        month: selected_month,
      },
      (response) => {
        try {
          if (chrome.runtime.lastError) {
            console.error("エラーが発生しました:", chrome.runtime.lastError);
            alert("データの取得に失敗しました。");
            return;
          }

          if (!response || !response.sheetData) {
            console.error("レスポンスデータが不正です:", response);
            alert("データの形式が不正です。");
            return;
          }

          const jsonData = JSON.stringify(response);
          const objData = JSON.parse(jsonData);
          let ss_data = objData.sheetData;

          let processed_count = 0;
          for (let date_data of ss_data) {
            // 日付データでないものは飛ばす
            if (typeof date_data[0] !== "number") continue;

            try {
              check_date(selected_year, selected_month, date_data[0]);
              check_work_style(
                date_data[1],
                selected_year,
                selected_month,
                date_data[0]
              );
              check_start_time(
                date_data[1],
                date_data[2],
                selected_year,
                selected_month,
                date_data[0]
              );
              check_end_time(
                date_data[1],
                date_data[3],
                selected_year,
                selected_month,
                date_data[0]
              );
              check_transportation(
                date_data[1],
                selected_year,
                selected_month,
                date_data[0]
              );
              check_report(
                date_data[5],
                selected_year,
                selected_month,
                date_data[0]
              );
              processed_count++;
            } catch (error) {
              console.error(
                `日付 ${date_data[0]} の処理でエラーが発生しました:`,
                error
              );
            }
          }

          console.log(`${processed_count}件のデータを処理しました。`);
          alert(`${processed_count}件のデータを挿入しました。`);
        } catch (error) {
          console.error("データ処理中にエラーが発生しました:", error);
          alert("データの処理に失敗しました。");
        } finally {
          // ボタンを元に戻す
          $("#insert_data").text("データ挿入").prop("disabled", false);
        }
      }
    );
  });

  $("#create_template").click(function () {
    let selected_year = $("#" + button_year_id).val();
    let selected_month = $("#" + button_month_id).val();

    // ローディング表示
    $("#create_template").text("作成中...").prop("disabled", true);

    chrome.runtime.sendMessage(
      {
        method: "post",
        year: selected_year,
        month: selected_month,
      },
      (response) => {
        try {
          if (chrome.runtime.lastError) {
            console.error("エラーが発生しました:", chrome.runtime.lastError);
            alert("テンプレートの作成に失敗しました。");
            return;
          }

          console.log("テンプレートが作成されました。");
          alert(
            `${selected_year}年${selected_month}月の勤務表テンプレートを作成しました。`
          );
        } catch (error) {
          console.error("テンプレート作成中にエラーが発生しました:", error);
          alert("テンプレートの作成に失敗しました。");
        } finally {
          // ボタンを元に戻す
          $("#create_template")
            .text("勤務表のテンプレートを作成")
            .prop("disabled", false);
        }
      }
    );
  });
});

// 日付チェック関数
function check_date(year, month, date) {
  $('input[name="CHK' + year + "_" + month + "_" + date + '"]').attr(
    "checked",
    true
  );
}

// 勤務形態チェック関数
function check_work_style(type, year, month, date) {
  if (type == "") return;
  $('input[name="KCD' + year + "_" + month + "_" + date + '0I"]').val(
    work_style[type]
  );
}

// 出勤時間チェック関数
function check_start_time(type, time, year, month, date) {
  if (type == "" || time == "") return;

  // 出勤時間
  const start = "K" + year + "_" + month + "_" + date + "0ST";
  const hour = get_hour(time);
  const minute = get_minute(time);

  if (type === "休日" || type === "有給") {
    $('select[name="' + start + 'H"]').val(0);
    $('select[name="' + start + 'M"]').val(0);
  } else {
    $('select[name="' + start + 'H"]').val(hour);
    $('select[name="' + start + 'M"]').val(minute);
  }
}

// 退勤時間チェック関数
function check_end_time(type, time, year, month, date) {
  if (type == "" || time == "") return;

  // 退勤時間
  const end = "K" + year + "_" + month + "_" + date + "0ET";
  const hour = get_hour(time);
  const minute = get_minute(time);

  // 日付フラグ
  let date_flag = false;
  if (hour <= 9) {
    date_flag = true;
  }

  if (type === "休日" || type === "有給") {
    $('select[name="' + end + 'H"]').val(0);
    $('select[name="' + end + 'M"]').val(0);
  } else {
    $('select[name="' + end + 'H"]').val(hour);
    $('select[name="' + end + 'M"]').val(minute);

    if (date_flag) {
      $('select[name="' + end + 'D"]').val(1);
    }
  }
}

// 交通費チェック関数
function check_transportation(type, year, month, date) {
  if (type == "") return;

  const type_name = "GI_COMBOBOX10@" + year + "_" + month + "_" + date + "0S";
  if (type === "出社") {
    $('select[name="' + type_name + '"]').val(2);
  }
}

// 報告事項チェック関数
function check_report(report, year, month, date) {
  if (report == "") return;
  const report_name = "JM" + year + "_" + month + "_" + date + "0";
  $('textarea[name="' + report_name + '"]').val(report);
}

// 時間変換関数
function get_hour(str_time) {
  const time = new Date(str_time);
  const hour = time.getUTCHours();
  return hour;
}

function get_minute(str_time) {
  const time = new Date(str_time);
  const minute = time.getUTCMinutes();
  return minute;
}
