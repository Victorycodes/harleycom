<x-guest-layout>
    <div class="sp">
    <div class="max-w-2xl mx-auto p-6 text-white">
        <h3 class="text-2xl font-semibold mb-6">Common Questions About HARLEYCOM</h3>

        <div x-data="{ open: 1 }" class="space-y-4">

            {{-- 1 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 1 ? null : 1">
                    <span>What Is HARLEYCOM?</span>
                    <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 1" x-collapse class="px-4 pb-4 text-gray-300">
                    HARLEYCOM is a digital marketing company offering search engine optimization services tailored to business goals.
                </div>
            </div>

            {{-- 2 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 2 ? null : 2">
                    <span>What SEO services does HARLEYCOM offer?</span>
                    <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 2" x-collapse class="px-4 pb-4 text-gray-300">
                    On-page SEO, link building, technical SEO audits, local SEO, content optimization, analytics reporting, and more.
                </div>
            </div>

            {{-- 3 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 3 ? null : 3">
                    <span>Do you guarantee top rankings in search engines?</span>
                    <svg :class="open === 3 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 3" x-collapse class="px-4 pb-4 text-gray-300">
                    No SEO company can guarantee top rankings due to algorithm unpredictability, but we ensure best practices and long-term results.
                </div>
            </div>

            {{-- 4 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 4 ? null : 4">
                    <span>How much does HARLEYCOM charge for its services?</span>
                    <svg :class="open === 4 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 4" x-collapse class="px-4 pb-4 text-gray-300">
                    Pricing depends on project scope, competition, and goals. Contact us for a personalized quote.
                </div>
            </div>

            {{-- 5 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 5 ? null : 5">
                    <span>How long does it take to see results from HARLEYCOM’s services?</span>
                    <svg :class="open === 5 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 5" x-collapse class="px-4 pb-4 text-gray-300">
                    On average, clients see results in 3–6 months. Timing varies based on your site, competition, and strategy.
                </div>
            </div>

        </div>

        <h3 class="text-2xl font-semibold mt-12 mb-6">Everything You Need to Know</h3>

        <div x-data="{ open: 6 }" class="space-y-4">

            {{-- 6 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 6 ? null : 6">
                    <span>How do I get started with HARLEYCOM?</span>
                    <svg :class="open === 6 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 6" x-collapse class="px-4 pb-4 text-gray-300">
                    Contact us via our website or email, and we’ll schedule a discovery call to understand your goals and begin onboarding.
                </div>
            </div>

            {{-- 7 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 7 ? null : 7">
                    <span>Can HARLEYCOM help with international SEO?</span>
                    <svg :class="open === 7 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 7" x-collapse class="px-4 pb-4 text-gray-300">
                    Yes, we specialize in international SEO strategies including hreflang implementation and multi-language content planning.
                </div>
            </div>

            {{-- 8 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 8 ? null : 8">
                    <span>Does HARLEYCOM work with businesses of all sizes?</span>
                    <svg :class="open === 8 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 8" x-collapse class="px-4 pb-4 text-gray-300">
                    Yes, from startups to enterprises — we tailor our SEO plans to your business scale and goals.
                </div>
            </div>

            {{-- 9 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 9 ? null : 9">
                    <span>Will HARLEYCOM handle content creation as part of their services?</span>
                    <svg :class="open === 9 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 9" x-collapse class="px-4 pb-4 text-gray-300">
                    Yes, we have in-house SEO writers who create optimized content to improve visibility and conversions.
                </div>
            </div>

            {{-- 10 --}}
            <div class="border border-gray-600 rounded-md">
                <button class="w-full flex justify-between items-center px-4 py-3 font-medium" @click="open = open === 10 ? null : 10">
                    <span>What kind of reporting will I receive from HARLEYCOM?</span>
                    <svg :class="open === 10 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 10" x-collapse class="px-4 pb-4 text-gray-300">
                    We provide monthly performance reports with keyword rankings, traffic stats, backlink profiles, and growth metrics.
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- AlpineJS CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-guest-layout>
