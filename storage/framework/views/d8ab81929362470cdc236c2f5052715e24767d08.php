<?php $__env->startSection('title'); ?>
    Edit User
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css -->
    <link href="<?php echo e(asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/select2/css/select2.min.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/select2/css/select2-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/iCheck/css/all.css')); ?>"  rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/pages/wizard.css')); ?>" rel="stylesheet">
    <!--end of page level css-->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>Edit user</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Users</a></li>
            <li class="active">Edit User</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Editing user : <p class="user_name_max"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></p>
                        </h3>
                        <span class="float-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!--main content-->
                        <?php echo Form::model($user, ['url' => URL::to('admin/users/'. $user->id.''), 'method' => 'put', 'class' => 'form-horizontal','id'=>'commentForm', 'enctype'=>'multipart/form-data','files'=> true]); ?>

                        <?php echo e(csrf_field()); ?>

                        <!-- CSRF Token -->


                            <div id="rootwizard">
                                <ul>
                                    <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link">User Profile</a></li>
                                    <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link ml-2">Bio</a></li>
                                    <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link ml-2">Address</a></li>
                                    <li class="nav-item"><a href="#tab4" data-toggle="tab" class="nav-link ml-2">User Group</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group <?php echo e($errors->first('first_name', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                                <div class="col-sm-10">
                                                    <input id="first_name" name="first_name" type="text"
                                                           placeholder="First Name" class="form-control required"
                                                           value="<?php echo old('first_name', $user->first_name); ?>"/>

                                                    <?php echo $errors->first('first_name', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group <?php echo e($errors->first('last_name', 'has-error')); ?>">
                                            <div class="row">                                            <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                                <div class="col-sm-10">
                                                    <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                                           class="form-control required"   value="<?php echo old('last_name', $user->last_name); ?>" />

                                                    <?php echo $errors->first('last_name', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                                <div class="col-sm-10">
                                                    <input id="email" name="email" placeholder="E-mail" type="text"
                                                           class="form-control required email"   value="<?php echo old('email', $user->email); ?>"/>
                                                    <?php echo $errors->first('email', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group <?php echo e($errors->first('password', 'has-error')); ?>">

                                                <p class="text-warning">If you don't want to change password... please leave them empty</p>
                                            <div class="row">
                                                <label for="password" class="col-sm-2 control-label">Password *</label>
                                                <div class="col-sm-10">
                                                    <input id="password" name="password" type="password" placeholder="Password"
                                                           class="form-control required" value="<?php echo old('password'); ?>"/>
                                                    <?php echo $errors->first('password', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group <?php echo e($errors->first('password_confirm', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                                <div class="col-sm-10">
                                                    <input id="password_confirm" name="password_confirm" type="password"
                                                           placeholder="Confirm Password " class="form-control required"/>
                                                    <?php echo $errors->first('password_confirm', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2> <div class="form-group  <?php echo e($errors->first('dob', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <input id="dob" name="dob" type="text" class="form-control"
                                                           data-date-format="YYYY-MM-DD" value="<?php echo old('dob', $user->dob); ?>"
                                                           placeholder="yyyy-mm-dd"/>
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('dob', ':message')); ?></span>
                                            </div>
                                        </div>


                                        <div class="form-group <?php echo e($errors->first('pic_file', 'has-error')); ?>">
                                            <div class="row">

                                                <label class="col-sm-2 control-label">Profile picture</label>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                            <?php if($user->pic): ?>
                                                                    <img src="<?php echo e($user->pic); ?>" alt="img"
                                                                         class="img-responsive"/>
                                                            <?php elseif($user->gender === "male"): ?>
                                                                <img src="<?php echo e(asset('images/authors/avatar3.png')); ?>" alt="..."
                                                                     class="img-responsive"/>
                                                            <?php elseif($user->gender === "female"): ?>
                                                                <img src="<?php echo e(asset('images/authors/avatar5.png')); ?>" alt="..."
                                                                     class="img-responsive"/>
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('images/authors/no_avatar.jpg')); ?>" alt="..."
                                                                     class="img-responsive"/>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                        <div>
                                                    <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                        <input id="pic" name="pic_file" type="file"
                                                               class="form-control"/>
                                                    </span>
                                                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput" style="color: black !important;">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('pic_file', ':message')); ?></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <label for="bio" class="col-sm-2 control-label">Bio <small>(brief intro) *</small></label>
                                                <div class="col-sm-10">
                        <textarea name="bio" id="bio" class="form-control resize_vertical"
                                  rows="4"><?php echo old('bio', $user->bio); ?></textarea>
                                                </div>
                                                <?php echo $errors->first('bio', '<span class="help-block">:message</span>'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3" disabled="disabled">
                                        <div class="form-group <?php echo e($errors->first('gender', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="email" class="col-sm-2 control-label">Gender *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" title="Select Gender..." name="gender">
                                                        <option value="">Select</option>
                                                        <option value="male" <?php if($user->gender === 'male'): ?> selected="selected" <?php endif; ?> >Male</option>
                                                        <option value="female" <?php if($user->gender === 'female'): ?> selected="selected" <?php endif; ?> >Female</option>
                                                        <option value="other" <?php if($user->gender === 'other'): ?> selected="selected" <?php endif; ?> >Other</option>

                                                    </select>
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('gender', ':message')); ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group <?php echo e($errors->first('country', 'has-error')); ?>">
                                            <div class="row">
                                                <label for="country" class="col-sm-2 control-label">Country</label>
                                                <div class="col-sm-10">
                                                    <?php echo Form::select('country', $countries,old('country',$user->country),array('class' => 'country_field form-control')); ?>

                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="state" class="col-sm-2 control-label">State</label>
                                                <div class="col-sm-10">
                                                    <input id="state" name="user_state" type="text" class="form-control"
                                                           value="<?php echo old('user_state', $user->user_state); ?>" />
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('state', ':message')); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="city" class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-10">
                                                    <input id="city" name="city" type="text" class="form-control"
                                                           value="<?php echo old('city', $user->city); ?>" />
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('city', ':message')); ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="address" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input id="address" name="address" type="text" class="form-control"
                                                           value="<?php echo old('address', $user->address); ?>"/>
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('address', ':message')); ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="postal" class="col-sm-2 control-label">Postal/zip</label>
                                                <div class="col-sm-10">
                                                    <input id="postal" name="postal" type="text" class="form-control"
                                                           value="<?php echo old('postal', $user->postal); ?>"/>
                                                </div>
                                                <span class="help-block"><?php echo e($errors->first('postal', ':message')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" disabled="disabled">
                                        <p class="text-danger"><strong>Be careful with group selection, if you give admin access.. they can access admin section</strong></p>

                                        <div class="form-group required">
                                            <div class="row">
                                                <label for="group" class="col-sm-2 control-label">Group *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control required"  title="Select group..." name="groups[]"
                                                            id="groups">
                                                        <option value="">Select</option>
                                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo $role->id; ?>" <?php echo e((array_key_exists($role->id, $userRoles) ? ' selected="selected"' : '')); ?> <?php if($user->id==1&&$role->id>=2): ?> disabled <?php endif; ?> <?php if($user->id==2 && $role->id!=2): ?> disabled <?php endif; ?>><?php echo e($role->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php echo $errors->first('group', '<span class="help-block">:message</span>'); ?>

                                                </div>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('group', ':message')); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="activate" class="col-sm-2 control-label"> Activate User *</label>
                                                <div class="col-sm-10">
                                                    <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" <?php if($status): ?> checked="checked" <?php endif; ?>  >
                                                    <span>To activate user account automatically, click the check box</span></div>

                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('vendors/iCheck/js/icheck.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/moment/js/moment.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"  type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/select2/js/select2.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/pages/edituser.js')); ?>"></script>
    <script>
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="<?php echo e(asset('img/countries_flags')); ?>/'+ state.element.value.toLowerCase() + '.png" class="img-flag" width="20px" height="20px" /> ' + state.text + '</span>'
            );
            return $state;

        }
        $(".country_field").select2({
            templateResult: formatState,
            templateSelection: formatState,
            placeholder: "select a country",
            theme:"bootstrap"
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>