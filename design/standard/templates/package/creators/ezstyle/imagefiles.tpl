{let class_list=fetch( class, list )}
<div id="package" class="create">
    <div id="sid-{$current_step.id|wash}" class="pc-{$creator.id|wash}">

    <form enctype="multipart/form-data" method="post" action={'package/create'|ezurl}>

    {include uri="design:package/create/error.tpl"}

    {include uri="design:package/header.tpl"}

    <p>{'Select an image file to be included in the package and click Next.
When you are done with adding images click Next without choosing an image.'|i18n('design/standard/package')|break}</p>
    
    {section show=$persistent_data.imagefiles}
    <div class="files">
        <h3>{'Currently added image files'|i18n('design/standard/package')}</h3>
        <ul>
            {section var=imagefile loop=$persistent_data.imagefiles}
            <li>{$imagefile.filename|wash}</li>
            {/section}
        </ul>
    </div>
    {/section}

    <input type="hidden" name="MAX_FILE_SIZE" value="32000000" />
    <input class="file" name="PackageImageFile" type="file" />

    {include uri="design:package/navigator.tpl"}

    </form>

    </div>
</div>
{/let}
