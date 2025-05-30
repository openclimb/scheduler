# 勤務表作る君

## 概要

「勤務表作る君」は、Google スプレッドシートと連携し、勤務表の作成・管理を効率化するChrome拡張機能です。  
特定のWebサイト上で勤務データを自動入力し、Google Apps Script（GAS）と連携してスプレッドシートのテンプレート作成やデータ取得・送信を行います。

---

## ディレクトリ構成

```
.
├── .gitignore
├── manifest.json
├── manifest.example.json
├── css/
│   └── style.css
├── js/
│   ├── background.js
│   ├── content.js
│   ├── jquery.min.js
│   └── gas/
│       ├── slack_webhook.js
│       └── spreadsheet_alignment.js
```

---

## 各ファイル・ディレクトリの説明

### ルート

- **manifest.json**  
  Chrome拡張機能の設定ファイル。  
  `manifest.example.json` はサンプル設定です。

- **.gitignore**  
  `manifest.json` をGit管理から除外します。

### css/

- **style.css**  
  拡張機能で追加されるUIのスタイル定義。

### js/

- **content.js**  
  対象WebページにUIを追加し、ユーザー操作やデータ挿入を行うメインスクリプト。

- **background.js**  
  拡張機能のバックグラウンドで動作し、GASとの通信（fetch）を担当。

- **jquery.min.js**  
  jQueryライブラリ。

#### js/gas/

- **slack_webhook.js**  
  SlackのWebhookからのリクエストを受けてスプレッドシートに勤務情報を記録するGASスクリプト。

- **spreadsheet_alignment.js**  
  スプレッドシートのテンプレート作成やデータ取得を行うGASスクリプト。

---

## 主な機能

- Chrome拡張として動作し、特定の勤務管理WebサイトにUIを追加
- 年・月を指定して勤務表データをGoogleスプレッドシートから取得・挿入
- スプレッドシートのテンプレート自動作成
- GAS（Google Apps Script）を利用したスプレッドシート操作
- SlackからのWebhookで勤務情報を記録

---

## インストール・セットアップ

1. このリポジトリをクローン
2. `manifest.json` を自身の環境に合わせて編集（`manifest.example.json` を参考に）
3. Chromeの「拡張機能」画面で「パッケージ化されていない拡張機能を読み込む」から本ディレクトリを選択
4. GASスクリプト（`js/gas/`内）をGoogle Apps Scriptにデプロイし、スプレッドシートIDやWebhookトークンを適宜修正

---

## 注意事項

- `manifest.json` はGit管理対象外です。必要に応じて `manifest.example.json` をコピーして利用してください。
- GASスクリプトのデプロイやスプレッドシートの権限設定が必要です。
- Slack連携を利用する場合は、Webhookの設定・トークンの発行が必要です。

---

## ライセンス

（必要に応じて記載） 