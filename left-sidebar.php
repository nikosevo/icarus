<?php
$result=mysqli_query($link,"SELECT COUNT(*) as total FROM `subject`");
$data=mysqli_fetch_assoc($result);
$subjectcount = $data['total'];

$result1=mysqli_query($link,"SELECT COUNT(*) as total FROM `profesors`");
$data1=mysqli_fetch_assoc($result1);
$profesorcount = $data1['total'];

$result2=mysqli_query($link,"SELECT COUNT(*) as total FROM `students`");
$data2=mysqli_fetch_assoc($result2);
$studentcount = $data2['total'];
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
                                    <a href="mailbox-folder.php">
                                        <span class="pull-right label label-primary">182</span>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Mailbox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="subjects-table.php">
                                        <span class="pull-right label label-primary"><?php echo $subjectcount ?></span>
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <span>subjects</span>
                                    </a>
                                </li>
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
                                <li>
                                    <a href="tuitions-table.php">
                                        <span class="pull-right label label-primary"><?php echo $profesorcount ?></span>
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        <span>Tuitions</span>
                                    </a>
                                    <a href="grades-table.php">
                                        <span class="pull-right label label-primary"><?php echo $profesorcount ?></span>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>Grades</span>
                                    </a>
                                </li>
                               
                                






                            </ul>
                        </nav>
            


                    </div>
            
                </div>
            
            </aside>