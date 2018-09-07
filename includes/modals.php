<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02/03/2018
 * Time: 10:56
 */?>
<!--Password Change-->
<div class="modal  fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="leave-new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class=" text-center text-main" >Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control form-control-success" placeholder="Old Password">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control form-control-success" placeholder="New Password Must be more than 8 characters!">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="leave-new" tabindex="-1" role="dialog" aria-labelledby="leave-new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class="modal-title text-center text-main" id="exampleModalLongTitle">LEAVE APPLICATION FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-left" id="exampleModalLongTitle">Name: <strong>Moses M. Mkembu</strong> | Position:<strong> ICT Manager</strong> | Department:
                    <strong> ICT</strong> | P/F No: <strong>PN-O273-00</strong> | Start Date: <strong>15/01/2018</strong></label>
                <hr class="modal-separator">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Select Leave Type you want to apply for" required>
                            <option value="Emergency" id="rest">Emergency</option>
                            <option value="Annual/Normal" id="annual">Annual/Normal</option>
                            <option value="Maternity" id="rest">Maternity</option>
                            <option value="Paternity" id="rest">Paternity</option>
                        </select>
                        <center><strong class="text-danger text-center" id="annualNotice" style="display: none">ANNUAL/NORMAL LEAVE SHOULD BE APPLIED 1(ONE) WEEK BEFORE!</strong></center>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#annual").click(function(){
                                $("#annualNotice").show(700);
                            });
                            $("#rest").click(function(){
                                $("#annualNotice").hide(700);
                            });
                        });
                    </script>
                </div><br>
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Date" required/>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input">
                            <input type="text" value=""  class="form-control form-control-success" placeholder="End Date" required/>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Time " required/>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input">
                            <input type="text" value="" class="form-control form-control-success" placeholder="End Time" required/>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <textarea class="form-control has-input" id="exampleFormControlTextarea1" rows="2" placeholder="Enter your reason(s)"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success btn-round">APPLY</button>
            </div>
        </div>
    </div>
</div>

<!--Preview Modal-->
<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class="modal-title text-center text-main" id="exampleModalLongTitle">ANNUAL LEAVE (12/03/2018 - 14/03/2018)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-left" id="exampleModalLongTitle">Name: <strong>Moses M. Mkembu</strong> | Position:<strong> ICT Manager</strong> | Department:
                    <strong> ICT</strong> | P/F No: <strong>PN-O273-00</strong> | Start Date: <strong>15/01/2018</strong></label>
                <hr class="modal-separator">
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Date" required/>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value=""  class="form-control form-control-success" placeholder="End Date" required/>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Time " required/>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="End Time" required/>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group has-input-filled">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="2" placeholder="Enter your reason(s)"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <P class="leave-status"><strong>STATE: </strong> <span class="text-success text-bold">APPROVED</span> </P>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group has-input-filled">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="2" placeholder="HOD/MD Comments"></textarea>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-success btn-round" data-dismiss="modal">OKAY</button>
            </div>
        </div>
    </div>
</div>

<!--Guidelines Modal-->
<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class="modal-title text-center text-main" id="exampleModalLongTitle">ANNUAL LEAVE (12/03/2018 - 14/03/2018)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-left" id="exampleModalLongTitle">Name: <strong>Moses M. Mkembu</strong> | Position:<strong> ICT Manager</strong> | Department:
                    <strong> ICT</strong> | P/F No: <strong>PN-O273-00</strong> | Start Date: <strong>15/01/2018</strong></label>
                <hr class="modal-separator">
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Date" required/>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value=""  class="form-control form-control-success" placeholder="End Date" required/>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="Start Time " required/>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group has-input-filled">
                            <input type="text" value="" class="form-control form-control-success" placeholder="End Time" required/>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group has-input-filled">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="2" placeholder="Enter your reason(s)"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <P class="leave-status"><strong>STATE: </strong> <span class="text-success text-bold">APPROVED</span> </P>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group has-input-filled">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="2" placeholder="HOD/MD Comments"></textarea>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-success btn-round" data-dismiss="modal">OKAY</button>
            </div>
        </div>
    </div>
</div>

<!--New File-->
<div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class="modal-title text-center text-main" id="exampleModalLongTitle">ADD NEW FILE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="form-group has-input-filled">
                            <p><i class="fa fa-file-medical"> </i> Select File</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                        <div class="form-group has-input-filled">
                            <input type="file" value=""  class="form-control form-control-success" placeholder="Folder Name E.g Certificates or Company documents" required/>
                        </div>
                    </div>


                    <div class="col-sm-3 col-md-3">
                        <div class="form-group has-input-filled">
                            <p><i class="fa fa-file-alt"> </i> File Type</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <strong><span class="form-check-sign"></span>
                                Personal</strong>
                            </label>
                        </div>

                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked>
                                <strong><span class="form-check-sign"></span>
                                Shared</strong>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm btn-round" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-success text-center btn-sm btn-round" data-dismiss="modal"><i class="fa fa-upload"></i> UPLOAD</button>
            </div>
        </div>
    </div>
</div>

<!--New Folder-->
<div class="modal fade" id="folder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border no-border">
            <div class="modal-header">
                <h5 class="modal-title text-center text-main" id="exampleModalLongTitle">CREATE NEW FOLDER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="form-group has-input-filled">
                            <p><i class="fa fa-folder-plus"> </i> Folder Name</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                        <div class="form-group has-input-filled">
                            <input type="text" value=""  class="form-control form-control-success" placeholder="Folder Name E.g Certificates or Company documents" required/>
                        </div>
                    </div>


                    <div class="col-sm-3 col-md-3">
                        <div class="form-group has-input-filled">
                            <p><i class="fa fa-folder-open"> </i> Folder Type</p>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <strong><span class="form-check-sign"></span>
                                    Personal</strong>
                            </label>
                        </div>

                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked>
                                <strong><span class="form-check-sign"></span>
                                    Shared</strong>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm btn-round" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-success text-center btn-sm btn-round" data-dismiss="modal"><i class="fa fa-plus"></i> CREATE</button>
            </div>
        </div>
    </div>
</div>



