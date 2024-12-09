// WhatsApp numarasını tanımlayın
const phoneNumber = "5325724526"; // Buraya numaranızı girin

// WhatsApp butonuna tıklama olayını dinle
document.getElementById('whatsappBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Linkin varsayılan davranışını engelle

    // WhatsApp linkini oluştur
    const whatsappLink = `https://wa.me/${phoneNumber}`;

    // Kullanıcıyı WhatsApp linkine yönlendir
    window.open(whatsappLink, '_blank');
});
