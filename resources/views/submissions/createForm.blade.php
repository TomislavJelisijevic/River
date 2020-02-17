<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
</head>

<div id="submissionform" class="container">

    <form method="POST" action="/submissions/store" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        <div class="control">
            <label for="name" class="label">Name:</label>
            <input type="text" id="name" name="name" class="input" v-model="form.name">
            <span class="help is-danger" v-if="form.errors.invalid('name')" v-text="form.errors.get('name')"></span>
        </div>

        <div class="control">
            <label for="description" class="label">Date:</label>
            <input type="date" id="date" name="date" class="input" v-model="form.date">
            <span class="help is-danger" v-if="form.errors.invalid('date')" v-text="form.errors.get('date')"></span>
        </div>

        <div class="control">
            <label for="description" class="label">Time:</label>
            <input type="time" id="time" name="time" class="input" v-model="form.time">
            <span class="help is-danger" v-if="form.errors.invalid('time')" v-text="form.errors.get('time')"></span>
        </div>

        <div class="control">
            <label for="description" class="label">Message:</label>
            <input type="text" id="message" name="message" class="input" v-model="form.message">
            <span class="help is-danger" v-if="form.errors.invalid('message')" v-text="form.errors.get('message')"></span>
        </div>

        <div class="control">
            <button class="button is-primary" :disabled="form.errors.exist()">Place Booking</button>
        </div>
    </form>
</div>

<body>
<script src="/js/app.js"></script>
</body>
</html>