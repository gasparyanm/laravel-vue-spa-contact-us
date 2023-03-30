<template>
    <div class="container">
        <h1>Contact US</h1>
        <form @submit.prevent="onSubmit">
            <p v-show="message" style="color: green">{{ message }}</p>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input
                    type="text"
                    id="full-name"
                    v-model="form.name"
                    placeholder="Your name"
                >
                <span
                    class="error-message"
                    v-if="errors.name"
                >
                    {{ errors.name[0] }}
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    v-model="form.email"
                    placeholder="Your Email"
                >
                <span
                    class="error-message"
                    v-if="errors.email"
                >
                    {{ errors.email[0] }}
                </span>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input
                    type="text"
                    id="subject"
                    v-model="form.subject"
                    placeholder="Subject"
                >
                <span
                    class="error-message"
                    v-if="errors.subject"
                >
                    {{ errors.subject[0] }}
                </span>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea
                    id="content"
                    v-model="form.content"
                    placeholder="Write something.."
                    style="height:200px"
                ></textarea>
                <span
                    class="error-message"
                    v-if="errors.content"
                >
                    {{ errors.content[0] }}
                </span>
            </div>

            <div class="form-group footer">
                <button type="submit">Create</button>
                <router-link :to="{ name : 'contact-us.list' }">
                    Show List
                </router-link>
            </div>
        </form>
    </div>
</template>

<script>
import {mapActions} from "vuex";

export default {
    data: () => ({
        form: {
            name: '',
            email: '',
            subject: '',
            content: ''
        },
        errors: {},
        message: '',
    }),
    methods: {
        ...mapActions(['createContactUs']),

        onSubmit() {
            this.createContactUs(this.form)
                .then(contactUs => {
                    this.message = 'Contact sent successfully';
                    this.init();
                })
                .catch(errors => {
                    this.message = '';
                    this.errors = errors;
                })
        },
        init() {
            this.form = {name: '', email: '', subject: '', content: ''}
        }
    },
    created() {
        this.init();
    }
}
</script>

<style scoped>
    .container {
        width: 500px;
        margin: auto;
        margin-top: 50px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .form-group{
        margin-bottom: 16px;
    }

    .form-group.footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    input, select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        resize: vertical
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .error-message {
        display: block;
        color: red;
    }
</style>
