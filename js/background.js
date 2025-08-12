const gasDeployID =
  "AKfycbwIZHd28uf1VevbSHo88gRys9O1AB38xJU4JszSxE_lfQwNPF0n9hG2yywDEuxgt7SK-Q";

chrome.runtime.onMessage.addListener(function (request, sender, callback) {
  console.log(`年: ${request.year}`);
  console.log(`月: ${request.month}`);

  // 「ウェブアプリ」としてデプロイしてるGASのURL
  let gasUrl = "https://script.google.com/macros/s/" + gasDeployID + "/exec";

  if (request.method == "post") {
    const SendData = {
      year: request.year,
      month: request.month,
    };
    
    fetch(gasUrl, { 
      method: "POST", 
      body: JSON.stringify(SendData),
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      console.log("テンプレート作成リクエストが送信されました");
      callback({ success: true });
    })
    .catch(error => {
      console.error("テンプレート作成でエラーが発生しました:", error);
      callback({ success: false, error: error.message });
    });
    
    return true;
  } else {
    gasUrl += "?year=" + request.year + "&month=" + request.month;
    
    fetch(gasUrl)
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text();
      })
      .then((json) => {
        console.log(`GASからのレスポンス: ${json}`);
        try {
          const parsedData = JSON.parse(json);
          callback(parsedData);
        } catch (parseError) {
          console.error("JSONパースエラー:", parseError);
          callback({ error: "データの解析に失敗しました" });
        }
      })
      .catch(error => {
        console.error("データ取得でエラーが発生しました:", error);
        callback({ error: "データの取得に失敗しました" });
      });

    // 非同期を同期的に扱うためのtrue
    return true;
  }
});
