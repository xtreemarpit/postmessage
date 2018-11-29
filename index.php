<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
</head>

<body>

  <form id="form">
    <input type="text" placeholder="Enter message" name="message">
    <input type="submit" value="Click to send">
  </form>

  <iframe src="http://xsdemo.com/techpullp/featured-user/" id="iframe" style="display:block;height:60px"></iframe>

  <script>
    form.onsubmit = function() {
      iframe.contentWindow.postMessage(this.message.value, '*');
      return false;
    };
  </script>

</body>
</html>
