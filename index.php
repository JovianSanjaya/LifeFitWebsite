<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>

<!-- Modal -->
<div class="nav">
    <div class="navUpper">
        <div class="logo" style="margin-left: 190px;">
            <a class="GoHomeLink" href="ProjectMainPage.html">
                <img class="navLogo" src="img/logo.png" alt="">
                <h1 class="textLogo" style="font-weight: bold;">LifeFit</h1>
            </a>
        </div>
        <div class="btnlinks">
            <div class="contactInfo">
                <img id="contactLogo" src="img/phoneicon.png" alt="">93597765
            </div>
            <a href="ProjectLogin.html">
                <div class="LoginButton">
                    <span class="LoginButtonText">Login</span>
                </div>
            </a>
        </div>
    </div>
    <hr class="navSeparator" style="margin-left: 190px;">
    <div class="navLower" style="margin-left: 190px;">
        <a class="navBarAboutUs" href="ProjectAboutUsPage.html">About Us</a>
        <a class="navBarOurServices" href="ProjectOurServicesPage.html">Our Services</a>
        <a class="navBarContactUs" href="ProjectContactUsPage.html">Contact Us</a>
        <a class="navBarDiscussion" href="index.php" id="navBarDiscussion" hidden>Discussion</a>
    </div>
</div>
<div class="MoveDown">
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const isLoggedIn = sessionStorage.getItem('LoggedIn');
    if (isLoggedIn === 'CareRecipientIN') {
      document.getElementById("navBarDiscussion").removeAttribute('hidden');
    }else if (isLoggedIn === 'CareGiverIN'){
        document.getElementById("navBarDiscussion").removeAttribute('hidden');
    }
  });
</script>
</body>
</html>