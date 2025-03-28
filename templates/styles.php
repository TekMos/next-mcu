<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
        grid-template-areas: 
        "header"
        "main"
        "footer";
        align-content: space-between;
    }
    header {
        margin-top: 10px;
    }
    .separator {
        width: 100%;
        border: .5px solid #ccc;
    }
    section {
        display: flex;
        justify-content: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    pre {
        font-size: 14px;
        overflow: scroll;
        max-height: 250px;
    }
    img {
        border-radius: 8px;
    }
    footer {
        font-size: 14px;
    }
</style>