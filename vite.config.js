import {defineConfig} from 'vite'

export default defineConfig({
    build: {
        outDir: './dist',
        manifest: true,
        rollupOptions: {
            input: 'src/scripts/main.js',
        },
    },
})