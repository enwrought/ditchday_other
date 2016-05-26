<html>
<head>
<title>Zootopia Database</title>
<!-- Bootstrap and jQuery -->
<link rel="stylesheet" href="bootstrap.min.css" />
<script src="jquery-2.2.4.min.js"></script>

</head>
<body>
<form>
  <div class="form-group">
    <label for="caseNumber">Case number:</label>
    <input class="form-control" id="caseNumber" placeholder="Lookup case number">
  </div>
  <div class="form-group">
    <label for="groupName">Squad</label>
    <input class="form-control" id="groupName" placeholder="Enter squad name">
  </div>
  <button id="lookupButton" class="btn btn-default">Lookup case</button>

</form>
<div id="results"></div>
<script>
  function submit(){
    // TODO
    console.log('Hi');
  }
  var btn = document.getElementById('lookupButton');
  btn.addEventListener('click', function(event) {
    event.preventDefault();
    console.log('Hi!');
    var text = $('#caseNumber').val();
    var group = $('#groupName').val();
    if (text.length === 0) {
      console.log('Missing case number.');
      return;
    }
    if (group.length === 0) {
      console.log('Missing squad name.');
      return;
    }
    var page = 'process_query.php?query=' + text + '&group=' + group;
    $.get(page, function(data) {
      $('#results').html(data);
    });

  });
</script>
</body>
</html>
