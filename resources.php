<?php include 'includes/top.php';?>
<body class="index-page">
<!-- Navbar -->
<div class="">

    <!-- Sidebar Holder -->
    <?php include 'includes/sidenav.php';?>
    <!-- Page Content Holder -->

    <div id="content">
        <!--Main Navbar-->
        <?php include 'includes/mainnav.php';?>
        <!--../Main Navbar-->

        <!-- Main Content Holder -->
        <div class="main-content" style="box-sizing: inherit;">
            <div class="container">
<!--                <h4 class="text-center text-bold title text-main">YOUR BIO DATA</h4>-->
                <div class="row">
                    <!--   PERSONAL & WORK -->

                    <div class="col-md-12">
                        <div class="card">
<!--                            <h6 class="text-center text-bold title text-main">Personal Files</h6>-->
                            <br>
                            <div class="text-center" style="font-size: 14px!important;">
                                <button class="btn btn-success btn-sm btn-round" data-toggle="modal" data-target="#file"><i class="fa fa-upload"></i> New File Upload </button>
                                <button class="btn btn-primary btn-sm btn-round" data-toggle="modal" data-target="#folder"><i class="fa fa-folder-plus"></i> New Folder </button>
                            </div>
                            <div class="row">
                                <!--PERSONAL FILES-->
                                <div class="col-md-12">
                                    <p class="category">Your Folders</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                                                        <i class="fa fa-folder-open"></i> Certificates &nbsp;&nbsp;&nbsp; <strong>(2)</strong>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                                                        <i class="fa fa-folder"></i> Settings
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                                                        <i class="fa fa-folder"></i> Options
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="link4">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">BBIT Degree.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">KCSE.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="link5">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">CV.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">Cover Letter.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="link6">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">BBIT Degree.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">KCSE.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--./PERSONAL FILES-->

                                <!--PERSONAL FILES-->
                                <div class="col-md-12" style="margin-top: 40px;margin-bottom: 30px">
                                    <p class="category">Shared Folders & Documents</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                                                        <i class="fa fa-folder-open"></i> Company Documents &nbsp;&nbsp;&nbsp; <strong>(2)</strong>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                                                        <i class="fa fa-folder"></i> HR Documents
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                                                        <i class="fa fa-folder"></i> Medical Documents
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="link4">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">BBIT Degree.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">KCSE.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="link5">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">CV.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">Cover Letter.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="link6">
                                                    <table class="table table-hover ">
                                                        <thead >
                                                        <tr class="text-center" style="margin-bottom: 10px">
                                                            <th class="text-center"></th>
                                                            <th class="text-main">Date</th>
                                                            <th class="text-main">Title</th>
                                                            <th class="text-main">Download</th>
                                                            <th class="text-main">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-bold">1</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">BBIT Degree.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">2</td>
                                                            <td>12/12/12 05:00PM</td>
                                                            <td class="text-bold">KCSE.pdf</td>
                                                            <td><button class="btn btn-sm btn-success btn-round"><i class="fa fa-download"></i> Download</button> </td>
                                                            <td><button class="btn btn-sm btn-danger btn-round"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--./PERSONAL FILES-->
                            </div>
                                </div>
<br>

                        </div>


                    </div>


</body>
<!--   Core JS Files   -->
<?php include 'includes/scripts.php';?>
<!--   Core Modal File   -->
<?php include 'includes/modals.php';?>


