function shuffle(array) { 
var currentIndex = array.length, temporaryValue, randomIndex; 
// While there remain elements to shuffle... 
while (0 !== currentIndex) { 
// Pick a remaining element... 
randomIndex = Math.floor(Math.random() * currentIndex); currentIndex -= 1; 
// And swap it with the current element. 
temporaryValue = array[currentIndex]; 
array[currentIndex] = array[randomIndex]; 
array[randomIndex] = temporaryValue; 
} 
return array; 
} 
Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, { size: "mini", sound: false, icon: false, title: false, position: "top right", showAfterPrevious: true, continueDelayOnInactiveTab: false, delay: 7000 }); 

function nr(a, b) { a = Math.ceil(a); b = Math.floor(b); return Math.floor(Math.random() * (b - a + 1)) + a } 

function ar(a) { return a[Math.floor(Math.random() * a.length)] } 

var notificacoes = ["" + nr(123, 339) + " pessoas estão visualizando este vídeo agora!", "" + nr(43, 135) + " pessoas compraram App Sniper na última hora", "" + ar(["Rogério", "Jackson", "Irineu", "Ricardo", "Bernardo", "Rafael", "Elias", "Iago", "Noah", "Kaique", "Benício", "Nathan", "Eduardo", "Bruno", "Lucas", "Hugo", "Enzo", "Isaac", "Oliver", "Gabriel", "Rodrigo", "Rodrigo", "Elias", "Caio", "Enzo", "Oliver", "Renan", "Manoel"]) + " comprou App Sniper há poucos minutos", "As licenças do sistema estão acabando...", "" + ar(["Ana", "Laura", "Beatriz", "Flávia", "Maria", "Alice", "Helena", "Aline", "Joana", "Fernanda", "Sueli", "Sophia", "Jaqueline", "Elisa", "Rayssa", "Renata", "Catarina", "Isabela", "Alana", "Antonella", "Eloá", "Ana", "Sebastiana", "Stefany", "Mariane", "Letícia", "Marcela"]) + " acabou de comprar App Sniper", "" +ar(["Ana", "Laura", "Beatriz", "Flávia", "Maria", "Alice", "Helena", "Aline", "Joana", "Fernanda", "Sueli", "Sophia", "Jaqueline", "Elisa", "Rayssa", "Renata", "Catarina", "Isabela", "Alana", "Antonella", "Eloá", "Ana", "Sebastiana", "Stefany", "Mariane", "Letícia", "Marcela"]) + " de " + ar(["Balneário Camboriú - SC","Cachoeiro de Itapemirim - ES","Tucuruí - PA","São Leopoldo - RS","Cabedelo - PB", "Palmas - TO","São Luís - MA", "Natal - RN", "Joinville - SC", "Campo Grande - MS", "Porto Velho - RO", "Belém - PA", "Formosa - GO","Balneário Camboriú - SC", "Ananindeua - PA","Balneário Camboriú - SC"]) + " acabou de comprar App Sniper","" + "89 Pessoas" + " Ganharam R$ 1.459,75 Usando o App Sniper Essa Semana","" + "13 Pessoas" + " Ganharam R$ 2.125,80 Usando o App Sniper Hoje"]; 


for (var i = 0; i < notificacoes.length; i++) { setTimeout("Lobibox.notify('success',{msg:notificacoes[" + i + "]})", (i + 1) * 12000 + timedDelay * 1000) }