import fs from 'fs'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import { defineConfig } from 'vite'
import { homedir } from 'os'
import path, { resolve } from 'path'

let host = 'openfantasyracing.test'

export default defineConfig({
  server: detectServerConfig(host),
  resolve: {
    alias: {
      '@': path.resolve('resources/js')
    }
  },
  plugins: [
    laravel([
      'resources/css/app.css',
      'resources/js/app.js'
    ]),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ]
})

function detectServerConfig(host) {
  let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`)
  let certificatePath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`)

  if (!fs.existsSync(keyPath)) {
    return {}
  }

  if (!fs.existsSync(certificatePath)) {
    return {}
  }

  return {
    hmr: { host },
    host,
    https: {
      key: fs.readFileSync(keyPath),
      cert: fs.readFileSync(certificatePath)
    }
  }
}