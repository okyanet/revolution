<?php
/**
 * Resource English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'アクセス';
$_lang['cache_output'] = 'キャッシュ出力';
$_lang['changes'] = '変更';
$_lang['class_key'] = 'クラスキー';
$_lang['context'] = 'コンテキスト';
$_lang['document'] = 'ドキュメント';
$_lang['document_create'] = 'ドキュメントを作成';
$_lang['document_create_here'] = 'ドキュメント';
$_lang['document_new'] = 'ドキュメントを作成';
$_lang['documents'] = 'ドキュメント';
$_lang['duplicate_uri_found'] = 'リソース [[+id]] はすでにURLとして [[+uri]] を使用しています。エイリアスまたはFreeze URIを入力し直してください。';
$_lang['empty_template'] = '（空）';
$_lang['general'] = '一般';
$_lang['markup'] = 'マークアップ/構造';
$_lang['none'] = 'なし';
$_lang['page_settings'] = '設定';
$_lang['preview'] = 'プレビュー（別窓）';
$_lang['resource_access_message'] = 'このリソースが属するリソースグループを設定できます。';
$_lang['resource_add_children_access_denied'] = '現在のアカウントにはここにリソースを作成する権限がありません。';
$_lang['resource_alias'] = 'エイリアス';
$_lang['resource_alias_help'] = 'このリソースの別名。この名前はURL表現にも使用されます。<br /><br />http://example.com/alias<br /><br />フレンドリーURL設定が有効な場合のみ動作します。';
$_lang['resource_alias_visible'] = 'Use current alias in alias path';
$_lang['resource_alias_visible_help'] = 'The alias of this Resource is inserted in Friendly URL alias path';
$_lang['resource_change_template_confirm'] = 'このテンプレートを変更しますか？<br /><br /><strong>警告：この操作はテンプレート変更の前に、一旦リソースに加えられた変更を保存します。保存する準備ができている事を確認して実行してください。<br /><br />また、ページが再読込された後、テンプレートの変更を実際に反映するには、再度手動で保存を実行する必要があります。</strong>';
$_lang['resource_cacheable'] = 'キャッシュ有効';
$_lang['resource_cacheable_help'] = '有効にすると、リソースはキャッシュに保存されます。';
$_lang['resource_cancel_dirty_confirm'] = '未確定の変更があります。本当にキャンセルしますか？';
$_lang['resource_class_key_help'] = 'リソースのクラスキー（documentObject[type]）です。';
$_lang['resource_content'] = 'コンテンツ';
$_lang['resource_contentdispo'] = 'コンテンツの渡し方';
$_lang['resource_contentdispo_help'] = 'このの項目を使用して、このリソースがブラウザでどのように扱われるかを指定します。「Attachment」を選択するとファイルのダウンロードとみなします。';
$_lang['resource_content_type'] = 'コンテントタイプ';
$_lang['resource_content_type_help'] = 'このリソースのコンテントタイプを設定します。どのコンテントタイプを選択すればよいかが分からない場合は、「text/html」のままにしてください。';
$_lang['resource_create_access_denied'] = '現在のアカウントにはリソースを作成する権限がありません。';
$_lang['resource_create_here'] = 'リソース';
$_lang['resource_createdby'] = '作成者';
$_lang['resource_createdon'] = '作成日';
$_lang['resource_delete'] = '削除';
$_lang['resource_delete_confirm'] = 'Are you sure you want to delete the resource: "[[+resource]]"?<br />NOTE: Any child resources will also be deleted!';
$_lang['resource_description'] = '説明';
$_lang['resource_description_help'] = 'リソースの説明。検索エンジン対策などに。[[*description]]として呼び出します。';
$_lang['resource_duplicate'] = '複製 - ';
$_lang['resource_edit'] = '編集 - ';
$_lang['resource_editedby'] = '編集者';
$_lang['resource_editedon'] = '編集日';
$_lang['resource_err_change_parent_to_folder'] = 'リソースの親フォルダを変更中にエラーが発生しました。';
$_lang['resource_err_class'] = 'リソースは有効な [[+class]] ではありません。';
$_lang['resource_err_create'] = 'リソースの作成中にエラーが発生しました。';
$_lang['resource_err_delete'] = 'リソースの削除中にエラーが発生しました。';
$_lang['resource_err_delete_children'] = 'An error occurred while trying to delete the children of the resource.';
$_lang['resource_err_delete_container_sitestart'] = '削除しようとしているリソースは、リソース [[+id]] を含むコンテナです。このリソースは「サイトスタート」として登録されているため、削除できません。他のリソースを「サイトスタート」に設定してからリトライしてください。';
$_lang['resource_err_delete_container_siteunavailable'] = '削除しようとしているリソースはリソース [[+id]] を含むフォルダーです。このリソースは、「メンテナンスモード用ページ」として登録されているため、削除できません。他のリソースを「メンテナンスモード用ページ」に設定してからリトライしてください。';
$_lang['resource_err_delete_sitestart'] = '「サイトスタート」のリソースであるため、削除できません。';
$_lang['resource_err_delete_siteunavailable'] = '「メンテナンスモード用ページとして使用されているため、削除できません。';
$_lang['resource_err_duplicate'] = 'リソースを複製中にエラーが発生しました。';
$_lang['resource_err_move_to_child'] = '自身のサブリソースには移動できません。';
$_lang['resource_err_move_sitestart'] = 'リソースが site_start として指定されているため、別のコンテキストに移動できません。';
$_lang['resource_err_nf'] = 'リソースが見つかりませんでした。';
$_lang['resource_err_nfs'] = 'ID [[+id]] のリソースが見つかりません。';
$_lang['resource_err_ns'] = 'リソースが指定されていません。';
$_lang['resource_err_own_parent'] = 'リソースは自身の親にはなれません。';
$_lang['resource_err_publish']  = 'リソースの公開開始日時設定中にエラーが発生しました。';
$_lang['resource_err_new_parent_nf'] = 'ID [[+id]] の親リソースが見つかりません。';
$_lang['resource_err_remove'] = 'リソースの削除中にエラーが発生しました。';
$_lang['resource_err_save'] = 'リソースの保存中にエラーが発生しました。';
$_lang['resource_err_select_parent'] = '親リソースを選択してください。';
$_lang['resource_err_symlink_target_invalid'] = 'The symlink target does not contain an integer value.';
$_lang['resource_err_symlink_target_nf'] = 'You cannot symlink to a resource that does not exist.';
$_lang['resource_err_symlink_target_self'] = 'You cannot symlink to itself.';
$_lang['resource_err_undelete'] = 'リソースの復活中にエラーが発生しました。';
$_lang['resource_err_undelete_children'] = 'サブリソースを復活中にエラーが発生しました。';
$_lang['resource_err_unpublish'] = 'リソースの公開終了日時設定中にエラーが発生しました。';
$_lang['resource_err_unpublish_sitestart'] = 'このリソースはトップページ（site_start）として設定されています。非公開に設定することはできません。';
$_lang['resource_err_unpublish_sitestart_dates'] = 'リソースはサイトスタート変数にリンクされていて、公開開始・終了の日付情報を保持することはできません。';
$_lang['resource_err_weblink_target_nf'] = 'You cannot set a weblink to a resource that does not exist.';
$_lang['resource_err_weblink_target_self'] = 'You cannot set a weblink to itself.';
$_lang['resource_folder'] = 'コンテナ属性';
$_lang['resource_folder_help'] = 'これにチェックを入れると、リソースは他のリソースのコンテナとして機能します。「コンテナ」はフォルダのようなもので、これだけがコンテンツを持つことができます。';
$_lang['resource_hide_children_in_tree'] = 'Hide Children';
$_lang['resource_hide_children_in_tree_help'] = 'Check this to make the children Resources hidden in resources tree.';
$_lang['resource_show_in_tree'] = 'Show in Tree';
$_lang['resource_show_in_tree_help'] = 'Uncheck this to hide Resource from tree. <b>Warning!</b> You will not be able to edit this Resource after via resources tree, only by direct link.';
$_lang['resource_group_resource_err_ae'] = '指定されたリソースは既にリソースグループに存在します。';
$_lang['resource_group_resource_err_nf'] = '指定されたリソースはリソースグループに含まれていません。';
$_lang['resource_hide_from_menus'] = 'メニューに表示しない';
$_lang['resource_hide_from_menus_help'] = '有効にしたとき、リソースはウェブメニューの中で有効に<b>なりません</b>。いくつかのMenuBuilderではこのオプションを無視する可能性があることに注意してください。';
$_lang['resource_link_attributes'] = 'リンク属性';
$_lang['resource_link_attributes_help'] = 'このリソースのリンクの属性を指定します。例えば target= や rel= など。';
$_lang['resource_locked_by'] = '[[+user]] にロックされています。';
$_lang['resource_longtitle'] = '長いタイトル';
$_lang['resource_longtitle_help'] = '長いタイトルを指定します。[[*longtitle]]として呼び出します。';
$_lang['resource_menuindex'] = 'メニューインデックス';
$_lang['resource_menuindex_help'] = 'これは一覧の中でのリソースの順序です。それは通常、動的にリソースを表示する順序を指定するために使用されます。いくつかの設定ではこれを無視するかもしれません。';
$_lang['resource_menutitle'] = 'メニュータイトル';
$_lang['resource_menutitle_help'] = 'ナビゲーションのメニュー名に用いる想定の、短めのタイトルを指定します。[[*menutitle]]として呼び出します。';
$_lang['resource_new'] = 'Create Resource';
$_lang['resource_notcached'] = 'このリソースはまだキャッシュされていません。';
$_lang['resource_pagetitle'] = 'タイトル';
$_lang['resource_pagetitle_help'] = 'リソース名を指定します。バックスラッシュは使えません。[[*pagetitle]]として呼び出します。サイトツリーの表示が煩雑にならないよう、短めの名前をつけるとよいでしょう。長めのタイトルが必要な場合は「長いタイトル」をお使いください。';
$_lang['resource_parent'] = '親リソース';
$_lang['resource_parent_help'] = '親リソースのIDを設定します。';
$_lang['resource_parent_select_node'] = '左のリストからノードを選択してください。';
$_lang['resource_publish'] = '公開';
$_lang['resource_publish_confirm'] = 'Publishing this resource now will delete any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to edit the resource instead.<br /><br />Proceed?';
$_lang['resource_publishdate'] = '公開日時';
$_lang['resource_publishdate_help'] = '公開開始予定日時をセットすると、公開開始予定日時になるとすぐに公開されます。カレンダーアイコンをクリックし、日付を選択するか、自動的に公開開始されないように空白にしてください。';
$_lang['resource_published'] = '公開済み';
$_lang['resource_published_help'] = '「公開する」のチェックを外すと、このリソースは非公開になります。';
$_lang['resource_publishedby'] = '公開者';
$_lang['resource_publishedon'] = '公開開始日時';
$_lang['resource_publishedon_help'] = 'リソースが公開開始された日時。';
$_lang['resource_refresh'] = '再読み込み';
$_lang['resource_richtext'] = 'リッチテキスト';
$_lang['resource_richtext_help'] = '有効にすると、リソースの編集にリッチテキストエディタを使用できます。リソースにJavaScriptやフォームを含む場合は、リッチテキストエディタがスクリプトやタグを乱す可能性がありますので、このチェックをはずし、プレーンテキストモードで編集してください。';
$_lang['resource_searchable'] = '検索対象';
$_lang['resource_searchable_help'] = '有効にすると、リソースを検索することができます。また、この設定はスニペットで他の目的に使用することができます。';
$_lang['resource_settings'] = 'リソース設定';
$_lang['resource_status'] = 'ステータス';
$_lang['resource_status_help'] = '公開開始されている場合はリソースは保存された直後に一般の人に閲覧可能になります。それ以外の場合は、公開サイトからは見えません。';
$_lang['resource_summary'] = '要約（リード文）';
$_lang['resource_summary_help'] = 'リソースの簡単な概要。新着情報の一覧やRSSフィードなどで用いるとよいでしょう。';
$_lang['resource_syncsite'] = '更新時にキャッシュ削除';
$_lang['resource_syncsite_help'] = 'ここにチェックを入れると、リソースの保存時にキャッシュを初期化します。';
$_lang['resource_template'] = '使用テンプレート';
$_lang['resource_template_help'] = 'リソースで使用するテンプレートを設定します。';
$_lang['resource_undelete'] = '未削除';
$_lang['resource_unpublish'] = '非公開';
$_lang['resource_unpublish_confirm'] = 'Un-publishing this resource now will delete any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to edit the resource instead. <br /><br />Proceed?';
$_lang['resource_unpublishdate'] = '公開終了予定日時';
$_lang['resource_unpublishdate_help'] = '公開終了予定日時を設定すると、公開終了予定日時になるとすぐに公開が終了します。カレンダーアイコンをクリックし、日付を選択するか、自動的に公開終了にされないように空白にしてください。';
$_lang['resource_unpublished'] = '非公開';
$_lang['resource_untitled'] = '無題のリソース';
$_lang['resource_uri'] = 'URI';
$_lang['resource_uri_help'] = 'このリソースの完全な相対URLを指定します。';
$_lang['resource_uri_override'] = 'URIを固定';
$_lang['resource_uri_override_help'] = '有効にすると、下に表示されるテキストボックスに入れた値で、このリソースのURIを固定することができます。';
$_lang['resource_with_id_not_found'] = 'リソースID %s が見つかりません。';
$_lang['resource_view'] = 'プレビュー';
$_lang['show_sort_options'] = 'ソートオプションの表示';
$_lang['site_schedule'] = '公開スケジュールの一覧';
$_lang['site_schedule_desc'] = 'ドキュメントの公開および公開終了スケジュールの一覧です。';
$_lang['source'] = 'ソース';
$_lang['static_resource'] = 'スタティックリソース';
$_lang['static_resource_create_here'] = 'スタティックリソース';
$_lang['static_resource_new'] = 'Create Static Resource';
$_lang['status'] = 'ステータス';
$_lang['symlink'] = 'シムリンク';
$_lang['symlink_create'] = 'シムリンクを作成';
$_lang['symlink_create_here'] = 'シムリンク';
$_lang['symlink_help'] = 'このシムリンクが参照するオブジェクトのアドレスを指定。既存のMODXのリソースを指定する場合は、対象リソースのIDを入力します。';
$_lang['symlink_message'] = 'シムリンクは、他の任意のリソースのクローンです。クローン元の内容がそのまま表示されますが、URLはここで指定したものが反映されます。';
$_lang['symlink_new'] = 'シムリンクを作成';
$_lang['template_variables'] = 'テンプレート変数';
$_lang['untitled_resource'] = '無題のリソース';
$_lang['weblink'] = 'ウェブリンク';
$_lang['weblink_create'] = 'ウェブリンクを作成';
$_lang['weblink_create_here'] = 'ウェブリンク';
$_lang['weblink_help'] = 'The full URL address of the object you wish to reference with this weblink ( https://example.com/page ). If you want to point to an existing MODX Resource, enter the ID here.';
$_lang['weblink_message'] = 'ウェブリンクは、インターネット上のあらゆるオブジェクトに対するショートカットのようなものです。オブジェクトとは、MODX内のリソース・他サイトのページや画像などを含みます。基本的にはリンク先のオブジェクトへリダイレクトします。<p>';
$_lang['weblink_new'] = 'ウェブリンクを作成';
$_lang['weblink_response_code'] = 'レスポンスコード';
$_lang['weblink_response_code_help'] = 'ウェブリンクが送出するHTTPのレスポンスコード。';

$_lang['resource_right_top_title'] = 'Publishing';
$_lang['resource_right_middle_title'] = 'テンプレート';
$_lang['resource_right_bottom_title'] = 'Behaviour in menu';
