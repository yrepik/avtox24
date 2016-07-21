<?php
 IncludeTemplateLangFile(__FILE__);
if ($arResult['EDIT_MODE']) {
    ?>
    		<input type="checkbox" id="lm-auto-select-all" title="<?= GetMessage('LM_AUTO_CHECK_ALL') ?>" checked />
    		<input type="hidden" name="type" value="<?= $arResult['type']?>"/>
    		<input type="hidden" name="parent_id" id="lm-td-parent-id" value="<?= htmlspecialchars($arResult['parent_id']) ?>"/>
    		<input type="hidden" name="set_id" value="<?= htmlspecialchars($arParams['MODIFICATIONS_SET']) ?>"/>
<?if (is_array($arResult['GROUPS'])) {?>
            <input type="button" id="lm-auto-edit-apply-for-all" value="<?=GetMessage('LM_AUTO_SAVE_VISIBILITY4ALL')?>"/>
<?}?>
    		<input type="submit" id="lm-auto-edit-submit" value="<?= GetMessage('LM_AUTO_SAVE') ?>"/>
    		<input type="button" id="lm-auto-edit-add" value="<?= GetMessage('LM_AUTO_ADD') ?>"/>
    	</form>
    <?
}

if (isset($arResult['SEO']['TEXT']) && !empty($arResult['SEO']['TEXT'])) {
    ?><div class="seo-description"><?= $arResult['SEO']['TEXT'] ?></div><?
}