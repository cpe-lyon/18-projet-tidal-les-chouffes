const API_KEY = "c01a1f527735b593597f65aba7701599";

//$("head").append(`<link href="styles/destinations.css" rel="stylesheet"/>`); // Auto include css

$(async function showDestinations() {
    const destinations = await (await fetch("data/destinations.json")).json();

    let content = "";
    for (const destinationId in destinations) {
        const destination = destinations[destinationId];

        content += `
            <a class="destination" href="booking.html?id=${destinationId}" data-id="${destinationId}">
                <img src="${destination.image}" alt="Image de destination"/>
                <div>
                    <div class="destination__info">
                        <span class="destination__title">${destination.name}</span>
                        <span class="destination__temp"></span>
                    </div>
                    <span class="destination__button"><i class="fa-solid fa-plane-departure"></i></span>
                </div>
            </a>
        `;
    }
    $("#destinations").html(content);

    // Load extras data
    $(".destination").each(async (index, element) => {
        const destination = destinations[$(element).data("id")]
        const geo = await (await fetch(`https://api.openweathermap.org/geo/1.0/direct?q=${destination.name}&appid=${API_KEY}`)).json();
        const weather = await (await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${geo[0]["lat"]}&lon=${geo[0]["lon"]}&units=metric&lang=fr&appid=${API_KEY}`)).json();

        $(element).find(".destination__temp").text(`${weather["main"]["temp"]}°c`);
    });

    // Define filter inputs default, max and min values
    const ascDestinations = destinations.sort((a, b) => a["pricing"]["adult"] + b["pricing"]["adult"]);
    const minPrice = ascDestinations[0]["pricing"]["adult"];
    const maxPrice = ascDestinations[ascDestinations.length - 1]["pricing"]["adult"];
    const minEl = $("#filters input[name=minPrice]");
    const maxEl = $("#filters input[name=maxPrice]");
    minEl.val(minPrice);
    minEl.prop("min", minPrice);
    minEl.prop("max", maxPrice);
    maxEl.val(maxPrice);
    maxEl.prop("min", minPrice);
    maxEl.prop("max", maxPrice);

    function handleChanges() {
        $(".destination").each(function() {
            const destination = destinations[$(this).data("id")];
            let show = destination["pricing"]["adult"] >= $("#filters input[name=minPrice]").val()
                && destination["pricing"]["adult"] <= $("#filters input[name=maxPrice]").val();

            if ($("#filters select[name=animals]").val() == 1)
                show = show && destination["pricing"]["animals"];
            else if ($("#filters select[name=parking]").val() == 2)
                show = show && !destination["pricing"]["animals"];

            if ($("#filters select[name=meal]").val() == 1)
                show = show && destination["pricing"]["meal"];
            else if ($("#filters select[name=meal]").val() == 2)
                show = show && !destination["pricing"]["meal"];

            $(this).toggle(show);
        });
    }

    $("#filters input").on("change", handleChanges);
    $("#filters select").on("change", handleChanges);
});