/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#00C367",
        secondary: "#E56B70",
        background: "#1F1F1F",
        section: "#2C2C2C",
        text: "#F2F2F2"
      },
      fontSize: {
        ExtraBold: ["48px", { fontWeight: '600' }],
        "ExtraBold-md": ["34px", { fontWeight: '600' }],

        SemiBold: ["20px", { fontWeight: '600' }],
        "SemiBold-md": ["16px", { fontWeight: '600' }],

        Regular: ["16px", { fontWeight: '400' }],
        "Regular-md": ["12px", { fontWeight: '400' }],
      },

      transitionTimingFunction: {
        'in-expo': 'cubic-bezier(0.95, 0.05, 0.795, 0.035)',
        'out-expo': 'cubic-bezier(0.19, 1, 0.22, 1)',
        'tab-expo':'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
      },
      backgroundImage: {
        'dashBorder': "url('/images/dashBorder.png')",
        'ctaBg': "url('../src/public/images/teamwork-meeting-with-business-people-1.png')",
      },
      keyframes: {
        scaler: {
          '0%, 100%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.05)' },
        },
        YTranslate: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
      },
      animation: {
        scaler: 'scaler 1s ease-in-out infinite',
        YTranslate: 'YTranslate 3s ease-in-out infinite',
      }
    },
  },
  plugins: [],
}

