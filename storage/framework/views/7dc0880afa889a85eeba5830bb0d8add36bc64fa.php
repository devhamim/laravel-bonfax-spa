<?php echo $__env->make('frontend.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('title', __('My Account')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.card','data' => []]); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('header', null, []); ?> 
                        <?php echo app('translator')->get('My Account'); ?>

                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('body', null, []); ?> 
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('My Profile'),'class' => 'nav-link active','id' => 'my-profile-tab','dataToggle' => 'pill','href' => '#my-profile','role' => 'tab','ariaControls' => 'my-profile','ariaSelected' => 'true']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('My Profile')),'class' => 'nav-link active','id' => 'my-profile-tab','data-toggle' => 'pill','href' => '#my-profile','role' => 'tab','aria-controls' => 'my-profile','aria-selected' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('Edit Information'),'class' => 'nav-link','id' => 'information-tab','dataToggle' => 'pill','href' => '#information','role' => 'tab','ariaControls' => 'information','ariaSelected' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Edit Information')),'class' => 'nav-link','id' => 'information-tab','data-toggle' => 'pill','href' => '#information','role' => 'tab','aria-controls' => 'information','aria-selected' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if(!$logged_in_user->isSocial()): ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('Password'),'class' => 'nav-link','id' => 'password-tab','dataToggle' => 'pill','href' => '#password','role' => 'tab','ariaControls' => 'password','ariaSelected' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Password')),'class' => 'nav-link','id' => 'password-tab','data-toggle' => 'pill','href' => '#password','role' => 'tab','aria-controls' => 'password','aria-selected' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('Two Factor Authentication'),'class' => 'nav-link','id' => 'two-factor-authentication-tab','dataToggle' => 'pill','href' => '#two-factor-authentication','role' => 'tab','ariaControls' => 'two-factor-authentication','ariaSelected' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Two Factor Authentication')),'class' => 'nav-link','id' => 'two-factor-authentication-tab','data-toggle' => 'pill','href' => '#two-factor-authentication','role' => 'tab','aria-controls' => 'two-factor-authentication','aria-selected' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </nav>

                        <div class="tab-content" id="my-profile-tabsContent">
                            <div class="tab-pane fade pt-3 show active" id="my-profile" role="tabpanel"
                                aria-labelledby="my-profile-tab">
                                <?php echo $__env->make('frontend.user.account.tabs.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!--tab-profile-->

                            <div class="tab-pane fade pt-3" id="information" role="tabpanel"
                                aria-labelledby="information-tab">
                                <?php echo $__env->make('frontend.user.account.tabs.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!--tab-information-->

                            <?php if(!$logged_in_user->isSocial()): ?>
                                <div class="tab-pane fade pt-3" id="password" role="tabpanel"
                                    aria-labelledby="password-tab">
                                    <?php echo $__env->make('frontend.user.account.tabs.password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <!--tab-password-->
                            <?php endif; ?>

                            <div class="tab-pane fade pt-3" id="two-factor-authentication" role="tabpanel"
                                aria-labelledby="two-factor-authentication-tab">
                                <?php echo $__env->make('frontend.user.account.tabs.two-factor-authentication', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!--tab-information-->
                        </div>
                        <!--tab-content-->
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <!--col-md-10-->
        </div>
        <!--row-->
    </div>
    <!--container-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/user/account.blade.php ENDPATH**/ ?>