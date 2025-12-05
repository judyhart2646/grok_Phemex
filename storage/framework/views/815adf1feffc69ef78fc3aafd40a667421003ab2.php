<?php $__env->startSection('page-head'); ?>
    <style>
        li[hidden] {
            display: none;
        }
        .layui-form-label{
            width: 180px;
        }
        .layui-input-block{
            margin-left: 210px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-content'); ?>

    <div class="larry-personal-body clearfix">
        <form class="layui-form col-lg-5">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    <li class="layui-this">充值返利</li>
                    <li>挖矿返利</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form-item">
                            <label class="layui-form-label">一级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="c_one_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['c_one_cash_back'])): ?><?php echo e($setting['c_one_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">二级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="c_two_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['c_two_cash_back'])): ?><?php echo e($setting['c_two_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">三级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="c_three_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['c_three_cash_back'])): ?><?php echo e($setting['c_three_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否开启返佣</label>
                            <div class="layui-input-block">
                                <div class="layui-input-inline">
                                    <input type="radio" name="c_cash_back_flag" value="1" title="是" <?php if(isset($setting['c_cash_back_flag'])): ?> <?php echo e($setting['c_cash_back_flag'] == 1 ? 'checked' : ''); ?> <?php endif; ?> >
                                    <input type="radio" name="c_cash_back_flag" value="0" title="否" <?php if(isset($setting['c_cash_back_flag'])): ?> <?php echo e($setting['c_cash_back_flag'] == 0 ? 'checked' : ''); ?> <?php else: ?> checked <?php endif; ?> >
                                </div>
                                <div class="layui-form-mid layui-word-aux">选择否的情况下不会进行返佣</div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="website_submit">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <div class="layui-form-item">
                            <label class="layui-form-label">一级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="w_one_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['w_one_cash_back'])): ?><?php echo e($setting['w_one_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">二级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="w_two_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['w_two_cash_back'])): ?><?php echo e($setting['w_two_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">三级返点比例(%)</label>
                            <div class="layui-input-block">
                                <input type="text" name="w_three_cash_back" autocomplete="off" class="layui-input"
                                       value="<?php if(isset($setting['w_three_cash_back'])): ?><?php echo e($setting['w_three_cash_back'] ?? ''); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否开启返佣</label>
                            <div class="layui-input-block">
                                <div class="layui-input-inline">
                                    <input type="radio" name="w_cash_back_flag" value="1" title="是" <?php if(isset($setting['w_cash_back_flag'])): ?> <?php echo e($setting['w_cash_back_flag'] == 1 ? 'checked' : ''); ?> <?php endif; ?> >
                                    <input type="radio" name="w_cash_back_flag" value="0" title="否" <?php if(isset($setting['w_cash_back_flag'])): ?> <?php echo e($setting['w_cash_back_flag'] == 0 ? 'checked' : ''); ?> <?php else: ?> checked <?php endif; ?> >
                                </div>
                                <div class="layui-form-mid layui-word-aux">选择否的情况下不会进行返佣</div>
                            </div>
                        </div>
                        
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="website_submit">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        layui.use(['element', 'form','table', 'upload', 'layer', 'laydate'], function () {
            var upload = layui.upload
                ,element = layui.element
                ,layer = layui.layer
                ,form = layui.form
                ,table = layui.table
                ,laydate = layui.laydate
                ,$ = layui.$;
           
            form.on('submit(website_submit)', function (data) {
                var data = data.field;
                delete data['file'];
                $.ajax({
                    url: '/admin/setting/inviteSetting',
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function (res) {
                        layer.msg(res.message);
                    }
                });
                return false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin._layoutNew', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>