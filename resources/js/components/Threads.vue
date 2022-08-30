<template>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>Nazwa</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></button>
                    <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            test: ''
        }
    },
    methods: {
        fetchThreads() {
            // this.$http.get()
        }
    }
}
</script>
