<style>
    .btn2 {
        all: unset;
        border-radius: 5px
    }

    * {
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    /* nomral-a */
    .normal-a {
        text-decoration: none;
        color: inherit;
    }

    .normal-a:hover {
        color: inherit;
        text-decoration: none;
    }

    /* hover-scale */
    .hover-scale {
        transition: transform 0.2s ease-in-out;
        position: relative;
    }

    .hover-scale:hover {
        transform: scale(1.05);
        z-index: 2;
    }

    /* hover-color-secondary */
    .hover-color-secondary {
        transition: transform 0.2s ease-in-out;
    }

    .hover-color-secondary:hover {
        background: #6c757d2c;
    }
</style>