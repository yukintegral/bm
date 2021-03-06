## フロントエンド

git cloneしたらまず、プロジェクトのディレクトリで以下を実行してください

### `npm install`

プロジェクトのディレクトリで以下のコマンドが実行できます:

### `npm run start`

アプリケーションが開発モードで実行されます。<br />
ブラウザで [http://localhost:3000](http://localhost:3000) が自動で開きます。

コードを編集するとホットリロードされ変更が表示されます。<br />
コードにエラーがあるとエラー画面が表示されます

 - トップページ [http://localhost:3000](http://localhost:3000)
 - 商品の詳細ページ [http://localhost:3000/posts/123456](http://localhost:3000/posts/123456)
 - ログインページ [http://localhost:3000/signin](http://localhost:3000/signin)
 - 出品ページ [http://localhost:3000/sell](http://localhost:3000/sell)
 - 出品者紹介ページ [http://localhost:3000/u/1234](http://localhost:3000/u/1234)
 - マイページ [http://localhost:3000/my](http://localhost:3000/my)
 - 検索結果ページ [http://localhost:3000/search?q=keyboard](http://localhost:3000/search?q=keyboard)

### `npm run build`

デプロイするその前に使用するコマンドです。<br />
コマンドによってbuildというディレクトリが作成されます。<br />
アプリケーションのJavaScriptコードの縮小版が静的 ディレクトリに生成されます。<br />
アプリケーションコードが複数のファイルにある場合でも、JavaScriptはすべて1つのファイルに縮小されます。<br />
最終的にバックエンドと接続させるのは、生成されたbuildディレクトリになります。
