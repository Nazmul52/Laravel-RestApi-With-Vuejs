<template>
  <div>
    <div class="bg-dark team_add_bar p-3">
      <div class="d-flex justify-content-center">
        <ul class="list-group list-group-horizontal-sm">
          <li :class="'list-group-item '+(totalSelectedCount >= index ? 'selected':'')" v-for="index in 11"
              :key="index">{{ index }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SelectedPlayerCount",
  props: {
    totalSelectedCount: {
      type: Number,
      default: () => 0,
      required: true,
    }
  }
}
</script>

<style scoped>

</style>
