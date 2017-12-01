

    <html>
    <head>

        <script type="text/javascript" src="js/test.js"></script>
        <script type="text/javascript"
                src="https://www.e-scott.jp/euser/stn/CdGetJavaScript.do?k_TokenNinsyoCode=abcdefghijk1234567890ABCDEFGHIJK"
                callBackFunc = "setToken"
                class = "spsvToken"></script>
    </head>
<body>
<script type="text/javascript" class="spsvButton" startText="カード情報入力" endText="カード情報入力済">
    <!-- ボタン押下時にカード情報入力画面を表示-->
    SpsvApi.spsvButton() ;
</script>
<form method="POST" action="貴社決済システム POST 先 URL">
    <input type="hidden" id="Token" />
    <input type="hidden" id="Card" />
    <input type="submit" value="購入">
</form>
</body>
<!-- 応答トークン受領処理実装 -->
<script type="text/javascript">
    function setToken (token,card) {
// データ送信フォーム内の要素へトークンとカード番号を設定
        document.getElementById('Token').value =token;
        document.getElementById('Card').value =card;
    }
</script>
</html>
