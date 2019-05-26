<?php $__env->startSection('title'); ?>
    Compose New Mail
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link href="<?php echo e(asset('vendors/select2/css/select2.min.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/select2/css/select2-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/summernote/css/summernote-bs4.css')); ?>" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>">
    <link href="<?php echo e(asset('css/pages/mail_box.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(isset($email_not_found)): ?>
        <div id="notific">
            <div class="alert alert-danger alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error:</strong> <?php echo e($email_not_found); ?>

            </div>
        </div>
    <?php endif; ?>
    <?php if(isset($success)): ?>
        <div id="notific">
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> <?php echo e($success); ?>

            </div>
        </div>
    <?php endif; ?>

    <section class="content-header">

        <!--section starts-->
        <h1>Compose</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Emails</a>
            </li>
            <li class="active">Compose</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row ">
            <div class="col-xl-2 col-md-3 col-sm-4 web-mail">
                <div class="whitebg1">
                    <ul>
                        <li class="compose">
                            <a href="<?php echo e(URL::to('admin/emails/compose')); ?>">
                                <i class="fa fa-fw fa-envelope"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(URL::to('admin/emails/inbox')); ?>">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                                <?php if($count>0): ?>
                                    <span class="badge badge-success float-right badge-pill mt-1"><?php echo e($count); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(URL::to('admin/emails/sent')); ?>">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp;Sent
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-10 col-md-9 col-sm-8">
                    <div class="card border-primary">
                        <div class="card-header bg-primary border-bottom">
                            <h4 class="mb-0">
                                <strong>Compose</strong>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(URL('admin/emails/compose')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data" files="true" id="mail_compose">
                                <?php echo e(csrf_field()); ?>

                                <div class="compose">
                            <div class="form-group  <?php echo e($errors->first('email_id', 'has-error')); ?>">
                                <label class="col-xs-2 control-label hidden-xs" for="email_id">To:</label>
                                <div class="col-xs-9">
                                    <select class="form-control select_email" name="email_id" id="email_id">
                                        <option></option>
                                        <?php $__currentLoopData = $existing_emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $existing_email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=<?php echo e($existing_email->email); ?>""><?php echo e($existing_email->email); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                <?php echo $errors->first('email_id', '<span class="help-block">:message</span>'); ?>

                                </div>
                            </div>
                                <div class="clear"></div>
                                <div class="form-group  <?php echo e($errors->first('subject', 'has-error')); ?>">
                                <label class="col-xs-2 control-label hidden-xs" for="subject">Subject:</label>
                                    <div class="col-xs-9">
                                <input type="text" name="subject" class="form-control required" id="subject" tabindex="1"
                                       placeholder="Subject">
                                    <?php echo $errors->first('subject', '<span class="help-block">:message</span>'); ?>

                                </div>
                                </div>
                                <div class="clear"></div>
                                <div class='box-body pad'>
                                    <div class="form-group <?php echo e($errors->first('email_message', 'has-error')); ?>">
                                        <textarea id="summernote" class="form-control" style="height: 400px;" name="email_message"></textarea>
                                        <?php echo $errors->first('email_message', '<span class="help-block">:message</span>'); ?>

                                    </div>
                                </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-sm  btn-primary btn_margin_top">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        Send
                                    </button>

                                    <a href="#" class="btn btn-sm btn-success btn_margin_top">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                        Draft
                                    </a>
                                </div>

                            </form>
                        </div>

                    </div>
            </div>


        </div>
    </section>
    <!-- content -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/select2/js/select2.js')); ?>" type="text/javascript"></script>
    <script  src="<?php echo e(asset('vendors/summernote/js/summernote-bs4.min.js')); ?>"  type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.select_email').select2({
                placeholder: "Select an Email",
            });
        $('body').on('click', '.btn-codeview', function (e) {

            if ( $('.note-editor').hasClass("fullscreen") ) {
                var windowHeight = $(window).height();
                $('.note-editable').css('min-height',windowHeight);
            }else{
                $('.note-editable').css('min-height','200px');
            }
        });
        $('body').on('click','.btn-fullscreen', function (e) {
            setTimeout (function(){
                if ( $('.note-editor').hasClass("fullscreen") ) {
                    var windowHeight = $(window).height();
                    var windowWidth = $(window).width();
                    $('.note-toolbar').css('min-width',windowWidth);
                }else{
                    $('.note-toolbar').css('min-width','300px');
                    $('.note-editable').css('min-height','200px');
                }
            },500);

        });
        $('.note-link-url').on('keyup', function() {
            if($('.note-link-text').val() != '') {
                $('.note-link-btn').attr('disabled', false).removeClass('disabled');
            }
        });
        function validateEditor() {
            $('#mail_compose').bootstrapValidator('revalidateField', 'email_message');
        };
        $("#mail_compose").bootstrapValidator({
            excluded: [':disabled'],
            fields: {
                email_message: {
                    validators: {
                        callback: {
                            message: 'The content is required and cannot be empty',
                            callback: function(value, validator) {
                                var code = $('#summernote').summernote('code');;
                                // <p><br></p> is code generated by Summernote for empty content
                                return (code !== '' && code !== '<p><br></p>');
                            }
                        }
                    }
                },
                email_id: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'Subject is required and cannot be empty'
                        }
                    },
                    minlength: 20
                }
            }
        }).find('[name="email_message"]').summernote({
            callbacks: {
                onKeyup: function(e) {
                    validateEditor();
                },
                onPaste: function(e) {
                    validateEditor();
                }
            },
            });
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>