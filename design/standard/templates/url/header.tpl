{default current_view_id='all'}
{let view_list=array(hash(id,'all',url,"url/list/all",name,"All"|i18n('design/standard/url')),
                     hash(id,'valid',url,"url/list/valid",name,"Valid"|i18n('design/standard/url')),
                     hash(id,'invalid',url,"url/list/invalid",name,"Invalid"|i18n('design/standard/url')))}


<table cellspacing="0" cellpadding="4" border="0">
<tr>
  <th colspan="{$view_list|count}">
    {"Filter"|i18n('design/standard/url')}
  </th>
<tr>
<tr>
{section name=View loop=$view_list}
  {section show=eq($current_view_id,$:item.id)}
  <td class="bglight">
    <p>{$:item.name}</p>
  </td>
  {section-else}
  <td class="bgdark">
    <p><a href={$:item.url|ezurl}>{$:item.name}</a></p>
  </td>
  {/section}
{/section}
</tr>
</table>

{/let}
{/default}
