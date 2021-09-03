var dayOfWeek = prompt("Enter the Day of Week");
        var result;
        dayOfWeek = dayOfWeek.toLowerCase();

        switch(dayOfWeek){
            case 'monday':
                result = "First Day of Week";
                break;
            case 'tuesday':
                result = "Second Days of Week";
                break;
            case 'wednesday':
                result = "Mid Week";
                break;
            case 'thursday':
                result = "Preparing for Weekend";
                break;
            case 'friday':
                result = "It's Friday!";
                break;
            case 'saturday':
                result = "Enjoying Day!";
                break;
            case 'sunday':
                result = "Resting Day!";
                break;
            default:
                result = "Cannot find that Value!";
        }