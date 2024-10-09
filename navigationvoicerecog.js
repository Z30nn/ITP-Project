const commands = {
    'home': function() {
        location.href = 'index.php';
    },
    'about us': function() {
        location.href = 'index.php';
    },
    'room': function() {
        location.href = 'roomnav.php';
    },
    'facilities': function() {
        location.href = 'facilities.php';
    },
    'contact': function() {
        location.href = 'email.php';
    },
    'book now': function() {
        location.href = 'booking.php';
    },
};

annyang.addCommands(commands);

annyang.start();