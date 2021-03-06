<div class="tpengumumen form">
<?php echo $form->create('Tpengumuman',array('url'=>'/tpengumumans/editbydosen'));?>
	<fieldset>
		<legend>Mata Kuliah</legend>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tkelase']['ID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kode Kuliah'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tmatakuliah']['KD_KULIAH']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama Kuliah'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tmatakuliah']['NAMA_KULIAH']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama Kelas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tkelase']['NAMA_KELAS']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Semester'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tsemester']['NAME']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tahun Ajaran'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['TtahunAjaran']['nama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dosen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tkelase['Tdosen']['NAMA_DOSEN']; ?>
			&nbsp;
		</dd>
	</dl>
	</fieldset>
	<fieldset>
 		<legend><?php __('Ubah Pengumuman');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('tkelase_id',array('type'=>"hidden"));
		echo $form->input('tanggal_mulai',array('label'=>'Tanggal Mulai','type'=>'text', 'class'=>'w8em format-y-m-d divider-dash'));
		echo $form->input('TGL_BERAKHIR',array('label'=>'Tanggal Berakhir','type'=>'text', 'class'=>'w8em format-y-m-d divider-dash'));
		echo $tinymce->input('PENGUMUMAN',array("label"=>"Isi Berita"), array( 
          'theme'                             => 'advanced',
          'theme_advanced_toolbar_location'   => 'top',
          'theme_advanced_toolbar_align'      => 'left',
          'theme_advanced_statusbar_location' => 'bottom'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Hapus', true), array('action'=>'delete', $form->value('Tpengumuman.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tpengumuman.id'))); ?></li>
		<li><?php echo $html->link(__('Daftar Pengumuman', true), array('action'=>'index'));?></li>
	</ul>
</div>
