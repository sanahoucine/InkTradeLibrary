!function(){"use strict";var e=window.wp.i18n,t=window.wp.escapeHtml,s=window.bp.dynamicWidgetBlock;class r extends s.dynamicWidgetBlock{loop(s=[],r="",i="active"){const a=super.useTemplate("bp-dynamic-members-item"),c=document.querySelector("#"+r);let n="";s&&s.length?s.forEach((s=>{if("active"===i&&s.last_activity)
/* translators: %s: last activity timestamp (e.g. "Active 1 hour ago") */
s.extra=(0,t.escapeHTML)((0,e.sprintf)((0,e.__)("Active %s","buddypress"),s.last_activity.timediff));else if("popular"===i&&s.total_friend_count){const r=parseInt(s.total_friend_count,10);s.extra=0===r?(0,t.escapeHTML)((0,e.__)("No friends","buddypress")):1===r?(0,t.escapeHTML)((0,e.__)("1 friend","buddypress")):(0,t.escapeHTML)((0,e.sprintf)((0,e.__)("%s friends","buddypress"),s.total_friend_count))}else"newest"===i&&s.registered_since&&(
/* translators: %s is time elapsed since the registration date happened */
s.extra=(0,t.escapeHTML)((0,e.sprintf)((0,e.__)("Registered %s","buddypress"),s.registered_since)));s.name=(0,t.escapeHTML)(s.name),
/* translators: %s: member name */
s.avatar_alt=(0,t.escapeAttribute)((0,e.sprintf)((0,e.__)("Profile picture of %s","buddypress"),s.name)),n+=a(s)})):n='<div class="widget-error">'+(0,e.__)("No members found.","buddypress")+"</div>",c.innerHTML=n}start(){this.blocks.forEach(((e,t)=>{const{selector:s}=e,{type:r}=e.query_args,i=document.querySelector("#"+s).closest(".bp-dynamic-block-container");super.getItems(r,t),i.querySelectorAll(".item-options a").forEach((e=>{e.addEventListener("click",(e=>{e.preventDefault(),e.target.closest(".item-options").querySelector(".selected").classList.remove("selected"),e.target.classList.add("selected");const s=e.target.getAttribute("data-bp-sort");s!==this.blocks[t].query_args.type&&super.getItems(s,t)}))}))}))}}const i=new r(window.bpDynamicMembersSettings||{},window.bpDynamicMembersBlocks||{});"loading"===document.readyState?document.addEventListener("DOMContentLoaded",i.start()):i.start()}();