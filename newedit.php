
    <?php include("includes/profileheader.php");?>

    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Profile</a>
                    </li>
                    <li>
                        <a href="services.html">Contacts</a>
                    </li>
                    <li>
                        <a href="contact.html">Followers</a>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Cards <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="portfolio-1-col.html">Business Card</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Personal card</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Business card 2</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Business card 3</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

<!-- IMAGE DISPLAY -->

        <div class="col-md-4">
        <h4> User Image</h4>
        <br>
        <form action="demo_form.asp">
  <input type="file" name="pic" accept="image/*">
  <input type="submit">
</form>
                
            
            </div>

            <!-- User Details with Edit Button -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Details</h4>
                    </div>
                    <div class="panel-body">
                        <form id="registerform" action="includes/register.php" method="post">
                            <fieldset>
                                
                            </fieldset>
                            
                            

 <H1>Details</H1>
<table>
<tr>
<td>First Name: </td>
 
 <td><INPUT TYPE="text" NAME="FirstName"><BR></td>
</tr>
<tr>
<td>Last Name:</td>
<td>
  <INPUT TYPE="text" NAME="LastName"><BR></td>

</tr>
<tr>
<td>Designation: </td>
<td>
 <INPUT TYPE="text" NAME="Designation"><BR>
</td>
</tr>
<tr>
<td>Company Name:</td>
<td>
  <INPUT TYPE="text" NAME="CompanyName"><br>
  </td>
</tr>
<tr>
<td>
 Phone No: 
 </td>
 <td>
 <INPUT TYPE="text" NAME="PhoneNo"><BR>
</td>
</tr>
<tr >
<td align="Center" colspan="2">

 <INPUT TYPE="submit">
</td>
</tr>
</table>
 </FORM>


                            
                        
                        <div id="regstatus"></div>
                    </div>
                </div>
            </div>
