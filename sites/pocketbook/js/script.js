$(document).ready(
	function firstBook() {
		$(".description h1").html("PocketBook 614 Basic 3 Plus");
		$(".description p").html("Простая в использовании доступная по цене электронная книга с базовой функциональностью. Она пригодится тем, кто ведёт активный образ жизни, много времени проводит в поездках, но не хочет расставаться с возможностью читать.");
		
	}

	function secondBook() {
		$(".description h1").html("PocketBook 614 Basic 3 Plus");
		$(".description p").html("Простая в использовании доступная по цене электронная книга с базовой функциональностью. Она пригодится тем, кто ведёт активный образ жизни, много времени проводит в поездках, но не хочет расставаться с возможностью читать.");

	}

	function thirdBook() {
		$(".description h1").html("PocketBook 615 Dark Brown");
		$(".description p").html("Электронная книжка PocketBook 615 откроет новый уровень свободы, для истинных почитателей электронного чтения. Благодаря встроенной диодной подсветке и уникальным свойствам 6 дюймового E-Ink Pearl HD дисплея, читать текст продолжительное время гораздо приятнее и удобнее. Мощный процессор с тактовой частотой 1 ГГц и 256 МБ оперативной памяти обеспечат плавное перелистывание и быстрый отклик любого приложения."");
	}

	function() {
		$("li").on("click", function() {
			$("#text-opt").html("soooqa");
		});
	}

);