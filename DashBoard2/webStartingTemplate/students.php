<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Franziska Kibunja">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    
</head>
<body>
	<!-- All our code. write here   -->
	 <div class="header">
        <a href="index.php">
		<img src="images/zalegologo.jpg" alt="Zalego" height="50" width="50" class=" mx-auto rounded-circle"> 
		</a>
	</div> 
    <br>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="">    
						<span><i class="fa fa-group"></i> </span>                  
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">   
						<span><i class="fa fa-folder-open"></i> </span>             
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">     
						<span><i class="fa fa-graduation-cap"></i> </span>        
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >Fullname</th>
                                <th >phone</th>
                                <th >email</th>
                                <th >gender</th>
                                <th >course</th>
                                <th>Enrolled on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Zigrid Wanjiru</td>
                                <td>0724602129</td>
                                <td>zigy@gmail.com</td>
                                <td>Female</td>
                                <td>Web Design and Development</td>
                                <td>11th May 2021</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sn">
                                       <i class="fa fa-edit"></i>
                                   </a>                                     
                                    <a href="#" class="btn btn-info btn-sn">
                                      <i class="fa fa-eye"></i>
                                    </a>                                 
                                    <a href="#" class="btn btn-danger btn-sn">
                                      <i class="fa fa-trash"></i>
                                    </a>                                  
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Celline Wanjiku</td>
                                <td>0723619228</td>
                                <td>celline@gmail.com</td>
                                <td>Female</td>
                                <td>Cyber Security</td>
                                <td>11th May 2021</td>
                                <td>
                                 <a href="#" class="btn btn-primary btn-sn"><i class="fa fa-edit"></i></a>
                                 <a href="#" class="btn btn-info btn-sn"></a>
                                 <a href="#" class="btn btn-danger btn-sn">Delete</a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Naren Vyas</td>
                                <td>918524369</td>
                                <td>Naren@gmail.com</td>
                                <td>Male</td>
                                <td>Data Analysis</td>
                                <td>1oth May 2021</td>
                                <td>
                                 <a href="#" class="btn btn-primary btn-sn">Edit</a>
                                 <a href="#" class="btn btn-info btn-sn">View</a>
                                 <a href="#" class="btn btn-danger btn-sn">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Siddhart Nigam</td>
                                <td>072328562</td>
                                <td>Nigam@gmail.com</td>
                                <td>Male</td>
                                <td>Cyber Security</td>
                                <td>12th May 2021</td>
                                <td>
                                 <a href="#" class="btn btn-primary btn-sn">Edit</a>
                                 <a href="#" class="btn btn-info btn-sn">view</a>
                                 <a href="#" class="btn btn-danger btn-sn">Delete</a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
		</div>         
	</div>

<script src="webStartingTemplate/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/webStartingTemplate/bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>