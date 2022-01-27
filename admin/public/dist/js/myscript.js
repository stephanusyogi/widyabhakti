// tombol-hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure you want to delete?",
		text: "",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Delete!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

$(".tombol-check-status-contact").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "This message has been responded by Admin",
		text: "This action cannot be undone, cancel if you not yet responing the message by email or whatsapp.",
		icon: "info",
		showCancelButton: true,
		confirmButtonColor: "#00FF00",
		cancelButtonColor: "#d33",
		confirmButtonText: "Check this Message!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});