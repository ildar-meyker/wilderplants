import $ from "jquery";
import "imagesloaded";

const InfoPopup = {
    handleOpenButton(e) {
        e.preventDefault();

        const src = $(e.currentTarget).data("src");

        $("#popup .popup__window").html("");
        $("#popup").addClass("active loading");

        $.get(src, function(data) {
            $(data).imagesLoaded(function() {
                $("#popup .popup__window").html(data);
                $("#popup").removeClass("loading");
            });
        });
    },

    handleCloseButton() {
        $("#popup").removeClass("active");
    },

    init() {
        $(document).on(
            "click",
            ".js-open-info",
            this.handleOpenButton.bind(this)
        );
        $(document).on(
            "click",
            ".js-close-info",
            this.handleCloseButton.bind(this)
        );
    }
};

export default InfoPopup;
