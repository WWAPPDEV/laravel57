<?php $__env->startSection('title'); ?>
    Inbox
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link href="<?php echo e(asset('vendors/iCheck/css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/pages/mail_box.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- page level css ends-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="content-header">

        <!--section starts-->
        <h1>Inbox</h1>
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
            <li class="active">Inbox</li>
        </ol>
    </section>
    <?php if(isset($success)): ?>
        <div id="notific">
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> <?php echo e($success); ?>

            </div>
        </div>
    <?php endif; ?>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row web-mail">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="whitebg1">
                    <ul>
                        <li class="compose">
                            <a href="<?php echo e(URL::to('admin/emails/compose')); ?>">
                                <i class="fa fa-fw fa-envelope"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo e(URL::to('admin/emails/inbox')); ?>">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                                <?php if($count>0): ?>
                                <span class="badge badge-success  float-right mt-1 badge-pill"><?php echo e($count); ?></span>
                                    <?php endif; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(URL::to('admin/emails/sent')); ?>">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <div class="whitebg1 mail_inbox_all">
                    <table class="table table-striped table-advance table-hover" id="inbox-check">
                        <thead>
                        <tr>
                            <td colspan="6" class="bg-primary">
                                <div class="col-md-8">
                                    <h4 class="mb-0">
                                        <strong>Inbox</strong>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">
                                <div class="row ">
                                    <div class="col-md-8 col-lg-6 col-xs-12">
                                        <div class="btn-group pull-left table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                            <input type="checkbox" id="checkall" class="icheck select_all_mail">
                                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">

                                            </a>
                                            <ul class="dropdown-menu ul" aria-labelledby="dropdownMenuButton">
                                                <!-- dropdown menu links -->
                                                <li>
                                                    <a href="#" class="all dropdown-item">All</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_read dropdown-item">Read</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_unread dropdown-item">UnRead</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_star dropdown-item">Starred</a>
                                                </li>
                                                <li>
                                                    <a href="#"  class="mark_as_unstar dropdown-item">Unstarred</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group pull-left table-bordered refresh_padding paddingrightleft_10 paddingtopbottom_5px margin_left">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-xs-12">
                                        <div class="pull-right">
                                            <?php echo e($emails->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="tr_read">
                        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-messageid="<?php echo e($email->id); ?>">
                                <td style="width:7%;" class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" name="inbox_checkbox" class="mail-checkbox" value="<?php echo e($email->id); ?>">
                                        </span>
                                    </div>
                                </td>
                                <td class="read_td"><input type="hidden" value="<?php echo e($email->status); ?>" <?php if($email->status == 0): ?>class="read" <?php else: ?> class="unread"<?php endif; ?> ></td>
                                <td style="width:2%;" class="inbox-small-cells">
                                    <div class="rating">
                                        <i class="fa fa-star starred"></i>
                                    </div>
                                </td>
                                <td style="width:22%;" class="view-message hidden-xs">
                                    <a href="<?php echo e(URL::to('admin/emails/'.$email->id )); ?>">
                                        <?php if($email->senderName->pic): ?>
                                            <img src="<?php echo $email->senderName->pic; ?>" alt="img" width="35"  height="35"
                                                 class="rounded-circle img-responsive img_height pull-left"/>
                                            <?php elseif(Sentinel::getUser()->gender === "male"): ?>
                                                <img src="<?php echo e(asset('images/authors/avatar3.png')); ?>" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>

                                            <?php elseif(Sentinel::getUser()->gender === "female"): ?>
                                                <img src="<?php echo e(asset('images/authors/avatar5.png')); ?>" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>

                                            <?php else: ?>
                                                <img src="<?php echo e(asset('images/authors/no_avatar.jpg')); ?>" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>
                                            <?php endif; ?>
                                        <?php echo e($email->senderName->first_name); ?> <?php echo e($email->senderName->last_name); ?></a>
                                </td>
                                <td style="width:40%;" class="view-message ">
                                    <a href="<?php echo e(URL::to('admin/emails/'.$email->id )); ?>"><?php echo e($email->subject); ?></a>
                                </td>

                                <td style="width:23%;" class="view-message text-right">
                                    <a href="<?php echo e(URL::to('admin/emails/'.$email->id )); ?>"><?php echo e($email->created_at->diffForHumans()); ?></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('vendors/iCheck/js/icheck.js')); ?>"></script>
        <script src="<?php echo e(asset('js/pages/mail_box.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>