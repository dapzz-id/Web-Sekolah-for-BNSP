/** @type {import('tailwindcss').Config} */
export default {
  mode: 'jit',
  important: true,
  theme: {
    extend: {
      fontFamily: {
          'sans': ['DM Sans', 'sans-serif'],
      },
      colors: {
          primary: '#8b5cf6',
          secondary: '#6b7280',
          accent: '#8b5cf6',
          purple: {
              500: '#a855f7',
              600: '#9333ea',
              700: '#7c3aed',
              800: '#6d28d9'
          },
          gray: {
              50: '#f9fafb',
              100: '#f3f4f6',
              200: '#e5e7eb',
              300: '#d1d5db',
              400: '#9ca3af',
              500: '#6b7280',
              600: '#4b5563',
              700: '#374151',
              800: '#1f2937',
              900: '#111827'
          }
      }
    },
  },
  plugins: [],
}