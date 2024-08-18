<?php
/* Текстовый редактор в редакторе категории */
function my_category_description($container = ''){
	$content = is_object($container) && isset($container->description) ? html_entity_decode($container->description) : '';
	$editor_id = 'tag_description';
	$settings = 'description';
?>
<tr class="form-field">
<th scope="row" valign="top"><label for="description">Описание...</label></th>
<td><?php wp_editor($content, $editor_id, array(
'textarea_name' => $settings,
'editor_css' => '<style>.html-active .wp-editor-area{border:0;}</style>',
)); ?><br />
<span class="description">Описание по умолчанию обычно не отображается! <br /> Но - некоторые темы могут его показывать</span></td>
</tr>
<?php
}
/* фин: редактор в полях - убираем старое поле редактирования */
remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );

function my_remove_category_description(){
	global $mk_description;

	if ( $mk_description->id == 'edit-category' or 'edit-tag' ){
        ?>
            <script type="text/javascript">
                jQuery(function($) {
                $('textarea#description').closest('tr.form-field').remove();
                });
            </script>
        <?php
	}
}
 
add_action('admin_head', 'my_remove_category_description');    // фильтр старого поля - скрываем
 
/* добавляем новое поле редактирования */
add_filter('edit_category_form_fields', 'my_category_description');   // для категорий-рубрик
add_filter('edit_tag_form_fields', 'my_category_description');        // для меток-тегов
 