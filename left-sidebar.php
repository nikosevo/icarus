<?php

include 'connect.php';

$result=mysqli_query($link,"SELECT COUNT(*) as total FROM `subject`");
$data=mysqli_fetch_assoc($result);
$subjectcount = $data['total'];

$result1=mysqli_query($link,"SELECT COUNT(*) as total FROM `profesors`");
$data1=mysqli_fetch_assoc($result1);
$profesorcount = $data1['total'];

$result2=mysqli_query($link,"SELECT COUNT(*) as total FROM `students`");
$data2=mysqli_fetch_assoc($result2);
$studentcount = $data2['total'];

$result3=mysqli_query($link,"SELECT COUNT(*) as total FROM `tuition`");
$data3=mysqli_fetch_assoc($result3);
$tuitioncount = $data3['total'];


?>

<aside id="sidebar-left" class="sidebar-left">
				
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="subjects-table.php">
                                        <span class="pull-right label label-primary"><?php echo $subjectcount ?></span>
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <span>subjects</span>
                                    </a>
                                </li>
                                <?php if($_SESSION['roleID'] == 3 || ($_SESSION['roleID'] == 1 && $_SESSION['userID'] == "")) {?>
                                    
                                
                                
                                <li>
                                    <a href="students-table.php">
                                        <span class="pull-right label label-primary"><?php echo $studentcount ?></span>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>Students</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="professors-table.php">
                                        <span class="pull-right label label-primary"><?php echo $profesorcount ?></span>
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>Professors</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="tuitions-table.php">
                                        <span class="pull-right label label-primary"><?php echo $tuitioncount ?></span>
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        <span>Tuitions</span>
                                    </a>
                                </li>
                                <?php if($_SESSION['roleID'] == 1 ) {?>
                                   
                                <li>
                                    <a href="grades-table.php">
                                        <span class="pull-right label label-primary"></span>
                                        <i class="fa fa-paste" aria-hidden="true"></i>
                                        <span>Grades</span>
                                    </a>
                                   
                                </li>
                                <?php } ?>
                                <?php if($_SESSION['roleID'] == 2 ) {
                                $usID=$_SESSION['userID'];
                                $role=$_SESSION['roleID'];
                                $sqll=mysqli_query($link,"SELECT stdID  FROM `students` where userID=$usID");
                                $resultt=mysqli_fetch_assoc($sqll);
                                $aID = $resultt['stdID'];   
                                ?>
                                    
                                   <li>
                                       <a href="profile.php?stdID=<?php echo $aID ?>&role=<?php echo $role ?>">
                                           <span class="pull-right label label-primary"></span>
                                           <i class="fa fa-paste" aria-hidden="true"></i>
                                           <span>Grades</span>
                                       </a>
                                      
                                   </li>
                                <?php } ?>
                                
                                <?php if($_SESSION['roleID'] == 2 ) {
                                $usID=$_SESSION['userID'];
                                $role=$_SESSION['roleID'];
                                $sqll=mysqli_query($link,"SELECT stdID  FROM `students` where userID=$usID");
                                $resultt=mysqli_fetch_assoc($sqll);
                                $aID = $resultt['stdID'];   
                                ?>
                                    
                                   <li>
                                       <a href="profile.php?stdID=<?php echo $aID ?>&role=<?php echo $role ?>">
                                           <span class="pull-right label label-primary"></span>
                                           <i class="fa fa-plus" aria-hidden="true"></i>
                                           <span>Registration</span>
                                       </a>
                                      
                                   </li>
                                <?php } ?>
                            </ul>
                        </nav>
            


                    </div>
            
                </div>
            
            </aside>