<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="content-header">
    <h1>
        <?= wpn_lang('module_title'); ?>
        <small><?= wpn_lang('module_description'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?= wpn_lang('wpn_menu_dashboard'); ?></a></li>
        <li><i class="fa fa-files-o"></i> <?= wpn_lang('module_title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= wpn_lang('module_index'); ?></h3>
            <div class="box-tools pull-right">
                <?= anchor('admin/posts/add', glyphicon('plus-sign') . wpn_lang('wpn_bot_new'), array('class' => 'btn btn-sm btn-primary')); ?>
                <?= anchor('admin/categorias', glyphicon('th-list') . wpn_lang('post_bot_new_category'), array('class' => 'btn btn-sm btn-default')); ?>
            </div>
        </div>
        <div class="box-body">

            <div class="table-responsive">
                <?= $listagem; ?>
            </div>
            
            <hr/>

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-sm-12 col-md-12">
                    <span class="total">Total de <b><?= $total_rows; ?></b> registros.</span>
                    <nav class="text-center">
                        <?= $pagination_links; ?>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</section>