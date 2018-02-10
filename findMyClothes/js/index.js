function createCard(item,appendto){
  let d = $('<div />',{ class: "item d-inline-block border-0 mr-2 mt-2" }).appendTo(appendto);
  let a = $('<a />',{ href: "product.php?id="+item.id }).appendTo(d);
  let img = $('<img />',{ class: 'img-fluid',src: item.img }).appendTo(a);
  let row = $('<div />',{ class: "row" }).appendTo(d);
  let innerdiv = $('<div />',{ class: "col p-3 text-left" }).appendTo(row);
  let small = $('<small />',{ class: "w-100 d-block pl-2",text: Number(item.likes).toLocaleString('il')+" Saved this" }).appendTo(innerdiv);
  let fa = $('<a />',{ href: "#",class:"bookmark pull-right pr-2" }).appendTo(small);
  let i = $('<i />',{ href: "#",class:"fa fa-lg"}).addClass(item.saved?"fa-bookmark":"fa-bookmark-o").appendTo(fa);
}

$( document ).ready(function() {
$.getJSON("./index.json",function(json){
  let container = $('<div />',{ class: "container" }).prependTo($('nav + .wrapper'));
  let d = $('<div />',{ class: "row mt-3" }).appendTo(container);
  let innerdiv = $('<div />',{ class: "col" }).appendTo(d);
  let img = $('<img />',{ class: 'img-fluid',src: json.topPromotion.img }).appendTo(innerdiv);
  let sinnerdiv = $('<div />',{ class: "col-6 p-0" }).appendTo(d);
  $('<span />',{ class: "title", text: json.topPromotion.title}).appendTo(sinnerdiv);
  $('<span />',{ class: "mb-0 mt-2 d-block subtitle", text: json.topPromotion.subliner }).appendTo(sinnerdiv);
  $('<span />',{ class: "mb-0 d-block subtitle", text:json.topPromotion.sublineralt }).appendTo(sinnerdiv);
  let botd = $('<div />',{ class: "row mt-4 text-center" }).appendTo(container);
  let botinnerdiv = $('<div />',{ class: "col-12" }).appendTo(botd);
  $('<span />',{ class: "title", text:json.bottomPromotion.title }).appendTo(botinnerdiv);
  let nbotinnerdiv = $('<div />',{ class: "col-12" }).appendTo(botd);
  $('<span />',{ class: "subtitle d-block", text:json.bottomPromotion.sub }).appendTo(nbotinnerdiv);
  let newbotd = $('<div />',{ class: "row mt-4 text-center" }).appendTo(container);
  let newinnerdiv = $('<div />',{ class: "recommendations w-100" }).appendTo(newbotd);
  let newsinnerdiv = $('<div />',{ class: "text-center" }).appendTo(newinnerdiv);
  json.bottomPromotion.cards.forEach(function(item) { createCard(item,newsinnerdiv);}); });
});
