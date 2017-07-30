  
  <script src="../../js/jquery-1.6.2.js"></script>
  <script src="../../js/global.js"></script>
  <script src="../../bower_components/jquery.autocomplete/jquery.autocomplete.js"></script>
  <!-- <script src="../../../jquery.autocomplete.js"></script> -->
  <link rel="stylesheet" href="../../bower_components/jquery.autocomplete/jquery.autocomplete.css">
  <!-- <link rel="stylesheet" href="../../../jquery.autocomplete.css"> -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="col-md-6">
	     <form class="navbar-form" name="search-patient" action="../patient/history.php" method="POST">
	        <div class="form-group" style="display:inline;">
	          <div class="input-group" style="display:table;">
	            <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
	            <input class="form-control" id="patientSearch" name="search" placeholder="Search Patient" autocomplete="off" type="text">
	          </div>
	        </div>
	      </form>	    
    </div>
    <ul class="nav navbar-nav navbar-right">
    	<li>
    		<a href="../../session/logout.php">
    			<i class="glyphicon glyphicon-user"></i>
    			Logout
    		</a>
    	</li>
    </ul>
  </div>
</nav>