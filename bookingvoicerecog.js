let recognition = null;
let currentListeningField = null;

function initializeRecognition() {
    recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.lang = 'en-US';
    recognition.onresult = function(event) {
        const result = event.results[0][0].transcript;
        if (currentListeningField === 'destination-input-field') {
            processDestinationResult(result);
        } else if (currentListeningField === 'check-in-input-field') {
            processCheckInResult(result);
        } else if (currentListeningField === 'check-out-input-field') {
            processCheckOutResult(result);
        } else if (currentListeningField === 'rooms-input-field') {
            processRoomsResult(result);
        } else if (currentListeningField === 'email-input-field') {
            processEmailResult(result);
        } else if (currentListeningField === 'phone-input-field') {
            processPhoneResult(result);
        }
        recognition.stop();
    };

    recognition.onerror = function(event) {
        console.error('Speech recognition error:', event.error);
    };
}

function startListening(inputField) {
    if (recognition !== null && recognition !== undefined) {
        if (recognition.active) {
            recognition.stop();
        }
        currentListeningField = inputField;
        recognition.start();
    } else {
        console.error('Speech recognition not initialized.');
    }
}

function stopListening() {
    if (recognition !== null && recognition !== undefined) {
        recognition.stop();
    }
}

function startListeningDestination() {
    startListening('destination-input-field');
}

function startListeningCheckIn() {
    startListening('check-in-input-field');
}

function startListeningCheckOut() {
    startListening('check-out-input-field');
}

function startListeningRooms() {
    startListening('rooms-input-field')
}

function startListeningEmail() {
    startListening('email-input-field')
}

function startListeningPhone() {
    startListening('phone-input-field')
}

function processDestinationResult(result) {
    // Split the result string into words
    let words = result.split(' ');
    
    // Capitalize the first letter of each word
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }
    
    // Join the words back into a single string
    let capitalizedResult = words.join(' ');
    
    // Assign the capitalized result to the destination input field
    document.getElementById('destination-input-field').value = capitalizedResult;
}


function processCheckInResult(result) {
    console.log(result);
    let dateParts = result.split(" ");
    let day = dateParts[0]; // Convert day to integer
    let month = dateParts[1].toLowerCase();
    let year = dateParts[2];
    document.getElementById('check-in-input-field').value = getFormattedDate(day, month, year);
}

function processCheckOutResult(result) {
    console.log(result);
    let dateParts = result.split(" ");
    let day = dateParts[0]; // Convert day to integer
    let month = dateParts[1].toLowerCase();
    let year = dateParts[2];
    document.getElementById('check-out-input-field').value = getFormattedDate(day, month, year);
}

function processRoomsResult(result){
    let roomSelect = document.getElementById('rooms-input-field');
    let options = roomSelect.options;
    let roomIndexInt = parseInt(result);

    if (!isNaN(roomIndexInt) && roomIndexInt > 0 && roomIndexInt <= options.length) {
        roomSelect.selectedIndex = roomIndexInt - 1;
    } else {
        console.log(result);
        // If spoken input is not a number, try to match room names
        let roomIndexString = result.trim().toLowerCase();
        console.log(result);
        switch (roomIndexString) {
            case "option one":
            case "option 1":
                roomSelect.selectedIndex = 1;
                break;
            case "option two":
            case "option to":
            case "option 2":
                roomSelect.selectedIndex = 2;
                break;
            case "option three":
            case "option 3":
                roomSelect.selectedIndex = 3;
                break;
            case "option four":
            case "option for":
            case "option 4":
                roomSelect.selectedIndex = 4;
                break;
            case "option five":
            case "option 5":
                roomSelect.selectedIndex = 5;
                break;
            case "option six":
            case "option 6":
                roomSelect.selectedIndex = 6;
                break;
            default:
                for (let i = 0; i < options.length; i++) {
                    if (options[i].text.toLowerCase() === roomIndexString) {
                        roomSelect.selectedIndex = i;
                        return;
                    }
                }
                console.error('Room not found:', result);
                break;
        }
    }
}

function processEmailResult(result) {
    // Remove spaces between each word
    let emailInput = result.replace(/\s/g, '');
    emailInput = emailInput.toLowerCase();
    emailInput = emailInput.replace(/at/g, '@'); // Replace "at" with "@"
    emailInput = emailInput.replace(/dot/g, '.'); // Replace "dot" with "."
    emailInput = emailInput.replace(/that/g, '.'); // Replace "that" with "."
    
    // Check if the email contains "@" and "." 
    if (emailInput.includes('@') && emailInput.includes('.')) {
        // Additional validation can be added here if needed
        document.getElementById('email-input-field').value = emailInput;
    } else {
        // Optionally, provide feedback to the user that the email format is invalid
        alert("Invalid email address: " + emailInput);
    }
}

function processPhoneResult(result) {
    let phoneNumber = result.replace(/\s/g, '');
    phoneNumber = phoneNumber.toLowerCase();
    
    document.getElementById('phone-input-field').value = phoneNumber;
}


function getFormattedDate(day, month, year) {
    let monthNumber = getMonthNumber(month);
    let monthString = monthNumber.toString().padStart(2, '0');
    if (day >= 10){
        let dayString = day.padStart(2, '0');
        return year + "-" + monthString + "-" + dayString;
    } else {
        let dayString = " ";
        if (day == "one" || day == "1") {
            dayString = "01";
        } else if (day == "two" || day == "to" || day == "2") {
            dayString = "02"
        } else if (day == "three" || day == "3") {
            dayString = "03"
        } else if (day == "four" || day == "for" || day == "4") {
            dayString = "04"
        } else if (day == "five" || day == "5") {
            dayString = "05"
        } else if (day == "six" || day == "6") {
            dayString = "06"
        } else if (day == "seven" || day == "7") {
            dayString = "07"
        } else if (day == "eight" || day == "8") {
            dayString = "08"
        } else if (day == "nine" || day == "9") {
            dayString = "09"
        }
        return year + "-" + monthString + "-" + dayString;
    }
}

function getMonthNumber(monthName) {
    let monthNumber;
    let monthNames = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
    for (let i = 0; i < monthNames.length; i++) {
        if (monthNames[i] === monthName) {
            monthNumber = i + 1;
            break;
        }
    }
    return monthNumber;
}

initializeRecognition();