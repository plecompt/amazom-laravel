#!/bin/bash

# === Config ===
PROJECT_NAME="Gestionnaire de taches"

# === Colors ===
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${YELLOW}🚀 Starting $PROJECT_NAME...${NC}"

# === Cleanup on exit ===
cleanup() {
    echo -e "${RED}🛑 Shutting down...${NC}"
    kill $LARAVEL_PID 2>/dev/null
    kill $VITE_PID 2>/dev/null
    exit 0
}
trap cleanup SIGINT SIGTERM

# === Prerequisites ===
if ! command -v php &> /dev/null; then
    echo -e "${RED}❌ PHP is not installed${NC}"
    exit 1
fi

if ! command -v npm &> /dev/null; then
    echo -e "${RED}❌ npm is not installed${NC}"
    exit 1
fi

echo -e "${GREEN}✅ All requirements are met${NC}"

# === Start Laravel server ===
echo -e "${YELLOW}🔧 Starting Laravel server at http://localhost:8000...${NC}"
php artisan serve &
LARAVEL_PID=$!

# === Start Vite dev server ===
echo -e "${YELLOW}⚡ Starting Vite dev server at http://localhost:5173...${NC}"
npm run dev &
VITE_PID=$!

# === Ready ===
echo -e "${GREEN}✅ $PROJECT_NAME is running!${NC}"
echo -e "${YELLOW}Press Ctrl+C to stop.${NC}"

# Wait forever until stopped
wait
