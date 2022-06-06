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
    fetch(gasUrl, { method: "POST", body: JSON.stringify(SendData) });
    return true;
  } else {
    gasUrl += "?year=" + request.year + "&month=" + request.month;
    fetch(gasUrl)
      .then((response) => {
        return response.text();
      })
      .then((json) => {
        console.log(`GASからのレスポンス: ${json}`);
        callback(JSON.parse(json));
      });

    // 非同期を同期的に扱うためのtrue
    return true;
  }
});
