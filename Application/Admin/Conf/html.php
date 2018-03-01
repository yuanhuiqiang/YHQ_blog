<?php
		return array(
			'VIEW_PATH'       =>'./Template/Admin/', // 改变某个模块的模板文件目录
			'TMPL_PARSE_STRING'  =>array(
					'__PUBLIC__' => PUBLIC_PATH, // 更改默认的/Public 替换规则
					'__STATIC__'     => __ROOT__.'/Template/Admin/Static', // 增加新的image  css js  访问路径  后面给 php 改了
			   ),
			   //'DATA_CACHE_TIME'=>60, // 查询缓存时间
			);
		?>