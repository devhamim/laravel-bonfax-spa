<?php echo $__env->make('frontend.style.bstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-logo" href="<?php echo e(route('frontend.index')); ?>"> <img src="assets/img/logo/logo-black.png" alt="logo" /> </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo app('translator')->get('Toggle navigation'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1): ?>
                <li>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __(getLocaleName(app()->getLocale())),'class' => 'nav-link dropdown-toggle','id' => 'navbarDropdownLanguageLink','dataToggle' => 'dropdown','ariaHaspopup' => 'true','ariaExpanded' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(getLocaleName(app()->getLocale()))),'class' => 'nav-link dropdown-toggle','id' => 'navbarDropdownLanguageLink','data-toggle' => 'dropdown','aria-haspopup' => 'true','aria-expanded' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php echo $__env->make('includes.partials.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </li>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.auth.login'),'active' => activeClass(Route::is('frontend.auth.login')),'text' => __('Login'),'class' => 'nav-link']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.login')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.auth.login'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Login')),'class' => 'nav-link']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </li>

                <?php if(config('boilerplate.access.user.registration')): ?>
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.auth.register'),'active' => activeClass(Route::is('frontend.auth.register')),'text' => __('Register'),'class' => 'nav-link']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.register')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.auth.register'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Register')),'class' => 'nav-link']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav-item dropdown ]">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => '#','id' => 'navbarDropdown','class' => 'nav-link dropdown-toggle','role' => 'button','dataToggle' => 'dropdown','ariaHaspopup' => 'true','ariaExpanded' => 'false','vPre' => true]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','id' => 'navbarDropdown','class' => 'nav-link dropdown-toggle','role' => 'button','data-toggle' => 'dropdown','aria-haspopup' => 'true','aria-expanded' => 'false','v-pre' => true]); ?>
                         <?php $__env->slot('text', null, []); ?> 
                            <img class="rounded-circle" style="max-height: 20px" src="<?php echo e($logged_in_user->avatar); ?>" />
                            <?php echo e($logged_in_user->name); ?>

                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <?php if($logged_in_user->isAdmin()): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.dashboard'),'text' => __('Administration'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Administration')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if($logged_in_user->isUser()): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.user.dashboard'),'active' => activeClass(Route::is('frontend.user.dashboard')),'text' => __('Dashboard'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.user.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.user.dashboard'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.user.account'),'active' => activeClass(Route::is('frontend.user.account')),'text' => __('My Account'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.user.account')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.user.account'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('My Account')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('Logout'),'class' => 'dropdown-item','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Logout')),'class' => 'dropdown-item','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']); ?>
                             <?php $__env->slot('text', null, []); ?> 
                                <?php echo app('translator')->get('Logout'); ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.logout'),'id' => 'logout-form','class' => 'd-none']]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.logout')),'id' => 'logout-form','class' => 'd-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <!--navbar-collapse-->
    </div>
    <!--container-->
</nav>

<?php if(config('boilerplate.frontend_breadcrumbs')): ?>
<?php echo $__env->make('frontend.includes.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/includes/nav.blade.php ENDPATH**/ ?>