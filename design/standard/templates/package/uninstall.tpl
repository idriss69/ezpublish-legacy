<div id="package">

<form method="post" action={concat( 'package/uninstall/', $package.name )|ezurl}>

    <h2>{'Uninstall package'|i18n('design/standard/package')}</h2>

    <p>{'The package can be uninstalled from your system, uninstalling the package will remove any installed files, content classes etc. all depending on the package.
If you do not wish to uninstall the package at this time you can do so later on the view page for the package.
You may also remove the package without uninstalling it from the package list.'|i18n('design/standard/package')|break}</p>

    <h3>{'Uninstall items'|i18n('design/standard/package')|break}</h3>
    <ul>
    {section var=uninstall loop=$uninstall_elements}
        <li>{$uninstall.description|wash}</li>
    {/section}
    </ul>

    <div class="buttonblock">
        <input class="defaultbutton" type="submit" name="UninstallPackageButton" value="{'Uninstall package'|i18n('design/standard/package')}" />
        <input class="button" type="submit" name="SkipPackageButton" value="{'Skip uninstallation'|i18n('design/standard/package')}" />
    </div>

</form>

</div>
